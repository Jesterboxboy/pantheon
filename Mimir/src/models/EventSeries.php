<?php
/*  Mimir: mahjong games storage
 *  Copyright (C) 2016  o.klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mimir;

use PhpParser\Node\Stmt\ElseIf_;

require_once __DIR__ . '/../Model.php';
require_once __DIR__ . '/Event.php';
require_once __DIR__ . '/../helpers/MultiRound.php';
require_once __DIR__ . '/../primitives/Event.php';
require_once __DIR__ . '/../primitives/Session.php';
require_once __DIR__ . '/../primitives/SessionResults.php';
require_once __DIR__ . '/../primitives/Player.php';
require_once __DIR__ . '/../primitives/PlayerRegistration.php';
require_once __DIR__ . '/../primitives/PlayerHistory.php';
require_once __DIR__ . '/../primitives/Round.php';
require_once __DIR__ . '/../exceptions/InvalidParameters.php';

class EventSeriesModel extends Model
{
    /**
     * @param EventPrimitive $event
     * @return array
     * @throws \Exception
     * @throws InvalidParametersException
     */
    public function getGamesSeries(EventPrimitive $event)
    {
        $ratingsSeriesToggle = TRUE;
        if ($event->getSeriesLength() == 0) {
            throw new InvalidParametersException('This event doesn\'t support series');
        }

        $eId = $event->getId();
        if (empty($eId)) {
            throw new InvalidParametersException('Attempted to use deidented primitive');
        }

        $gamesRaw = SessionPrimitive::findByEventAndStatus($this->_ds, $eId, SessionPrimitive::STATUS_FINISHED);

        $games = [];
        foreach ($gamesRaw as $game) {
            $gId = $game->getId();
            if (!empty($gId)) {
                $games[$gId] = $game;
            }
        }

        // load and group by player all session results
        $results = SessionResultsPrimitive::findByEventId($this->_ds, [$eId]);
        $playersData = [];
        foreach ($results as $item) {
            if (empty($playersData[$item->getPlayerId()])) {
                $playersData[$item->getPlayerId()] = [];
            }

            $playersData[$item->getPlayerId()][] = [
                'sessionId' => $item->getSessionId(),
                'score' => $item->getScore(),
                'place' => $item->getPlace(),
                'result' => $item->getRatingDelta(),
            ];
        }

        $sessionResults = [];
        foreach ($results as $item) {
            if (empty($sessionResults[$item->getSessionId()])) {
                $sessionResults[$item->getSessionId()] = [];
            }
            $sessionResults[$item->getSessionId()][$item->getPlayerId()] = $item;
        }

        // we had to consider only players with enough games
        $filteredPlayersData = [];
        foreach ($playersData as $playerId => $playerGames) {
            if (count($playerGames) >= $event->getSeriesLength()) {
                $filteredPlayersData[$playerId] = $playerGames;
            }
        }

        // let's find a best series for the filtered players by place if _seriesScoreRating is not set.
        $placeSeriesResults = [];
        $resultSeriesResults = [];

        foreach ($filteredPlayersData as $playerId => $playerGames) {
            $offset = 0;
            $limit = $event->getSeriesLength();
            $gamesCount = count($playerGames);

            // make sure that games were sorted (newest goes first)
            uasort($playerGames, function ($a, $b) {
                return $a['sessionId'] - $b['sessionId'];
            });

            $bestPlaceSeries = null;
            $bestResultSeries = null;
            while (($offset + $limit) <= $gamesCount) {
                $slicedGames = array_slice($playerGames, $offset, $limit);
                /** @var int $places */
                $places = array_reduce($slicedGames, function ($i, $item) {
                    $i += $item['place'];
                    return $i;
                }, 0);
                /** @var float $scores */
                $scores = array_reduce($slicedGames, function ($i, $item) {
                    $i += $item['score'];
                    return $i;
                }, 0);
                /** @var float $results */
                $results = array_reduce($slicedGames, function ($i, $item) {
                    $i += $item['result'];
                    return $i;
                }, 0);
                $sessionIds = array_map(function ($el) {
                    return $el['sessionId'];
                }, $slicedGames);

                if (!$bestPlaceSeries) {
                    // for the first iteration we should get the first series
                    $bestPlaceSeries = [
                        'placesSum'  => $places,
                        'scoresSum'  => $scores,
                        'sessionIds' => $sessionIds,
                        'resultsSum' => $results,
                    ];
                } else {
                    // the less places the better
                    if ($places <= $bestPlaceSeries['placesSum']) {
                        // we can have multiple series with same places sum
                        // let's get the one with better scores in that case
                        if ($places == $bestPlaceSeries['placesSum']) {
                            // the bigger scores the better
                            if ($scores > $bestPlaceSeries['scoresSum']) {
                                $bestPlaceSeries = [
                                    'placesSum'  => $places,
                                    'scoresSum'  => $scores,
                                    'resultsSum' => $results,
                                    'sessionIds' => $sessionIds,
                                ];
                            }
                        } else {
                            $bestPlaceSeries = [
                                'placesSum'  => $places,
                                'scoresSum'  => $scores,
                                'resultsSum' => $results,
                                'sessionIds' => $sessionIds,
                            ];
                        }
                    }
                }

                if (!$bestResultSeries) {
                    // for the first iteration we should get the first series
                    $bestResultSeries = [
                        'placesSum'  => $places,
                        'scoresSum'  => $scores,
                        'sessionIds' => $sessionIds,
                        'resultsSum' => $results,
                    ];
                } else {
                    // the less places the better
                    if ($results >= $bestResultSeries['resultsSum']) {
                        // we can have multiple series with same places sum
                        // let's get the one with better scores in that case
                        if ($results == $bestResultSeries['resultsSum']) {
                            // the bigger scores the better
                            if ($places < $bestResultSeries['placesSum']) {
                                $bestResultSeries = [
                                    'placesSum'  => $places,
                                    'scoresSum'  => $scores,
                                    'resultsSum' => $results,
                                    'sessionIds' => $sessionIds,
                                ];
                            }
                        } else {
                            $bestResultSeries = [
                                'placesSum'  => $places,
                                'scoresSum'  => $scores,
                                'resultsSum' => $results,
                                'sessionIds' => $sessionIds,
                            ];
                        }
                    }
                }

                $offset++;
            }

            // It't implied that $bestSeries is not null after the loop, so we add guard here by continue otherwise
            if (!$bestPlaceSeries || !$bestResultSeries) {
                continue;
            }

            // it is useful to know current player series
            $offset = $gamesCount - $event->getSeriesLength();
            $limit = $event->getSeriesLength();
            $currentSeries = array_slice($playerGames, $offset, $limit);
            $currentSeriesSessionIds = array_map(function ($el) {
                return $el['sessionId'];
            }, $currentSeries);
            $currentSeriesScores = array_reduce($currentSeries, function ($i, $item) {
                $i += $item['score'];
                return $i;
            }, 0);
            $currentSeriesPlaces = array_reduce($currentSeries, function ($i, $item) {
                $i += $item['place'];
                return $i;
            }, 0);
            $currentSeriesResults = array_reduce($currentSeries, function ($i, $item) {
                $i += $item['results'];
                return $i;
            }, 0);

            $bestPlaceSeries['playerId'] = $playerId;
            $bestPlaceSeries['currentSeries'] = $currentSeriesSessionIds;
            $bestPlaceSeries['currentSeriesScores'] = $currentSeriesScores;
            $bestPlaceSeries['currentSeriesPlaces'] = $currentSeriesPlaces;
            $bestPlaceSeries['currentSeriesResults'] = $currentSeriesResults;
            $bestResultSeries['playerId'] = $playerId;
            $bestResultSeries['currentSeries'] = $currentSeriesSessionIds;
            $bestResultSeries['currentSeriesScores'] = $currentSeriesScores;
            $bestResultSeries['currentSeriesPlaces'] = $currentSeriesPlaces;
            $bestResultSeries['currentSeriesResults'] = $currentSeriesResults;

            $placeSeriesResults[] = $bestPlaceSeries;
            $resultSeriesResults[] = $bestResultSeries;
        }

        uasort($placeSeriesResults, function ($a, $b) {
            $diff = $a['placesSum'] - $b['placesSum'];
            if ($diff) {
                return $diff > 0 ? 1 : -1;
            }
            $scoreDiff = $b['scoresSum'] - $a['scoresSum'];
            if (abs($scoreDiff) < 0.00001) {
                return 0;
            } else if ($scoreDiff > 0) {
                return 1;
            } else {
                return -1;
            }
        });

        uasort($resultSeriesResults, function ($a, $b) {
            $diff = $a['resultsSum'] - $b['resultsSum'];
            if ($diff) {
                return $diff < 0 ? 1 : -1;
            }
            $scoreDiff = $b['placesSum'] - $a['placesSum'];
            if (abs($scoreDiff) < 0.00001) {
                return 0;
            } else if ($scoreDiff > 0) {
                return 1;
            } else {
                return -1;
            }
        });

        $players = EventModel::getPlayersOfGames($this->_ds, $games);
        $formattedResults = [];
        if (!$ratingsSeriesToggle) {
            foreach ($placeSeriesResults as $item) {
                $playerId = $item['playerId'];
                $bestSeriesIds = $item['sessionIds'];
                $bestScoresSum = $item['scoresSum'];
                $bestPlacesSum = $item['placesSum'];
                $bestResultsSum = $item['resultsSum'];
                $formattedResults[] = [
                    'player' => $players[$item['playerId']],
                    'best_series' => $this->_formatSeries($playerId, $bestSeriesIds, $games, $sessionResults),
                    'best_series_scores' => $bestScoresSum,
                    'best_series_places' => $bestPlacesSum,
                    'best_series_results' => $bestResultsSum,
                    'best_series_avg_place' => $this->_formatAvgPlace($bestPlacesSum, count($bestSeriesIds)),
                    'current_series' => $this->_formatSeries($playerId, $item['currentSeries'], $games, $sessionResults),
                    'current_series_scores' => $item['currentSeriesScores'],
                    'current_series_results' => $item['currentSeriesResults'],
                    'current_series_places' => $item['currentSeriesPlaces'],
                    'current_series_avg_place' => $this->_formatAvgPlace($item['currentSeriesPlaces'], count($item['currentSeries'])),
                ];
            }
        } else if ($ratingsSeriesToggle) {
            foreach ($resultSeriesResults as $item) {
                $playerId = $item['playerId'];
                $bestSeriesIds = $item['sessionIds'];
                $bestScoresSum = $item['scoresSum'];
                $bestPlacesSum = $item['placesSum'];
                $bestResultsSum = $item['resultsSum'];
                $formattedResults[] = [
                    'player' => $players[$item['playerId']],
                    'best_series' => $this->_formatSeries($playerId, $bestSeriesIds, $games, $sessionResults),
                    'best_series_scores' => $bestScoresSum,
                    'best_series_places' => $bestPlacesSum,
                    'best_series_results' => $bestResultsSum,
                    'best_series_avg_place' => $this->_formatAvgPlace($bestPlacesSum, count($bestSeriesIds)),
                    'current_series' => $this->_formatSeries($playerId, $item['currentSeries'], $games, $sessionResults),
                    'current_series_scores' => $item['currentSeriesScores'],
                    'current_series_results' => $item['currentSeriesResults'],
                    'current_series_places' => $item['currentSeriesPlaces'],
                    'current_series_avg_place' => $this->_formatAvgPlace($item['currentSeriesPlaces'], count($item['currentSeries'])),
                ];
            }
        }

        return $formattedResults;
    }

    /**
     * @param int $playerId
     * @param int[] $seriesIds
     * @param SessionPrimitive[] $sessions
     * @param SessionResultsPrimitive[][] $sessionResults
     * @return array
     */
    private function _formatSeries($playerId, $seriesIds, $sessions, $sessionResults)
    {
        $result = [];
        foreach ($seriesIds as $seriesId) {
            $result[] = [
                'hash' => $sessions[$seriesId]->getRepresentationalHash(),
                'place' => $sessionResults[$seriesId][$playerId]->getPlace()
            ];
        }
        return $result;
    }

    /**
     * @param int $placesSum
     * @param int $gamesCount
     * @return string
     */
    private function _formatAvgPlace($placesSum, $gamesCount)
    {
        $result = $gamesCount == 0 ? 0.0 : 1.0 * $placesSum / $gamesCount;
        return number_format($result, 2);
    }
}
