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
require_once __DIR__ . '/../../src/Ruleset.php';
require_once __DIR__ . '/../../src/helpers/YakuMap.php';

class RulesetRyanpinton2 extends Ruleset
{
    public static $_title = 'ryanpinton2';
    protected static $_ruleset = [
        'tenboDivider'          => 1000,
        'ratingDivider'         => 1,
        'startRating'           => 0,
        'oka'                   => 0,
        'startPoints'           => 30000,
        'subtractStartPoints'   => true,
        'riichiGoesToWinner'    => true,
        'extraChomboPayments'   => true,
        'chomboPenalty'         => 0,
        'withAtamahane'         => false,
        'withAbortives'         => false,
        'withKuitan'            => true,
        'withKazoe'             => false,
        'withButtobi'           => true,
        'withMultiYakumans'     => false,
        'withNagashiMangan'     => false,
        'withKiriageMangan'     => false,
        'tonpuusen'             => true,
        'gameExpirationTime'    => false,
        'yakuWithPao'           => [Y_DAISANGEN, Y_DAISUUSHII],
        'minPenalty'            => 0.1,
        'maxPenalty'            => 20,
        'penaltyStep'           => 0.1,
        'timerPolicy'           => 'yellowZone',
        'yellowZone'            => 900, // 15min
        'redZone'               => 0,
        'withLeadingDealerGameOver' => true,
        'replacementPlayerFixedPoints' => -15,
        'replacementPlayerOverrideUma' => -15
    ];

    public function allowedYaku()
    {
        return YakuMap::listExcept([
            Y_RENHOU,
            Y_OPENRIICHI
        ]);
    }

    /**
     * @param array $scores
     * @return array
     */
    public function uma($scores = [])
    {
        return $this->_equalizeUma($scores, [1 => 15, 5, -5, -15]);
    }
}
