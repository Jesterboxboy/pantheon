<?php
/*  Mimir: mahjong games storage
 *  Copyright (C) 2016  player1 and others
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

require_once __DIR__ . '/../../../src/Db.php';
require_once __DIR__ . '/../../../src/helpers/onlineLog/Parser.php';
require_once __DIR__ . '/../../../src/primitives/PlayerRegistration.php';
require_once __DIR__ . '/../../../src/primitives/PlayerStats.php';

/**
 * Replay parser integration test suite
 *
 * Class OnlinelogParserTest
 * @package Mimir
 */
class OnlinelogParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DataSource
     */
    protected $_ds;
    /**
     * @var PlayerPrimitive[]
     */
    protected $_players;
    /**
     * @var EventPrimitive
     */
    protected $_event;
    /**
     * @var SessionPrimitive
     */
    protected $_session;

    protected function setUp(): void
    {
        $this->_ds = DataSource::__getCleanTestingInstance();

        $this->_event = (new EventPrimitive($this->_ds))
            ->setTitle('title')
            ->setTimezone('UTC')
            ->setDescription('desc')
            ->setLobbyId('0')
            ->setRulesetConfig(\Common\Ruleset::instance('tenhounet'));
        $this->_event->save();

        $this->_players = PlayerPrimitive::findById($this->_ds, [1, 2, 3, 4]);
        foreach ($this->_players as $p) {
            (new PlayerRegistrationPrimitive($this->_ds))
                ->setReg($p, $this->_event)
                ->save();
        }

        $this->_session = (new SessionPrimitive($this->_ds))
            ->setEvent($this->_event)
            ->setPlayers($this->_players)
            ->setStatus(SessionPrimitive::STATUS_INPROGRESS)
            ->setReplayHash('');
        $this->_session->save();
    }

    public function testParseUsualGame()
    {
        $content = file_get_contents(__DIR__ . '/testdata/usual.xml');
        list($success, $results, $rounds) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );

        $openHands = 0;
        foreach ($rounds as $round) {
            if ($round->getOpenHand()) {
                $openHands++;
            }
        }

        $this->assertEquals(16, count($rounds));
        $this->assertEquals(7, $openHands);
    }

    public function testParseYakumanDoubleRon()
    {
        $content = file_get_contents(__DIR__ . '/testdata/doubleron.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testParseTripleYakuman()
    {
        $content = file_get_contents(__DIR__ . '/testdata/tripleyakuman.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testParseDoubleRonAndRiichiBets()
    {
        $content = file_get_contents(__DIR__ . '/testdata/doubleron_and_riichi.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testParseDoubleRonAndHonbaBets()
    {
        $content = file_get_contents(__DIR__ . '/testdata/doubleron_and_honba.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testParseNagashiMangan()
    {
        $content = file_get_contents(__DIR__ . '/testdata/nagashi.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testHanchanWithWestRound()
    {
        $content = file_get_contents(__DIR__ . '/testdata/west.xml');
        list($success, $results/*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
    }

    public function testParseRegressUsualGame()
    {
        $content = file_get_contents(__DIR__ . '/testdata/openhand_bug.xml');
        list($success, $results, $rounds) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );

        $openHands = 0;
        foreach ($rounds as $round) {
            if ($round->getOpenHand()) {
                $openHands++;
            }
        }

        $this->assertEquals(9, count($rounds));
        $this->assertEquals(3, $openHands);
    }

    public function testRonWithPao()
    {
        $content = file_get_contents(__DIR__ . '/testdata/pao_ron.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(4, $rounds[2]->getPaoPlayerId());
    }

    public function testTsumoWithPao()
    {
        $content = file_get_contents(__DIR__ . '/testdata/pao_tsumo.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(4, $rounds[1]->getPaoPlayerId());
    }

    public function testYakumanTsumoNoDealerWithoutPao()
    {
        $content = file_get_contents(__DIR__ . '/testdata/suuankou_no_dealer_tsumo_no_pao.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $paoApplyCount = 0;
        foreach ($rounds as $round) {
            if ($round->getPaoPlayerId() != null) {
                $paoApplyCount++;
            }
        }

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(0, $paoApplyCount);
    }

    public function testYakumanTsumoDealerWithoutPao()
    {
        $content = file_get_contents(__DIR__ . '/testdata/suukantsu_dealer_tsumo_no_pao.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $paoApplyCount = 0;
        foreach ($rounds as $round) {
            if ($round->getPaoPlayerId() != null) {
                $paoApplyCount++;
            }
        }

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(0, $paoApplyCount);
    }

    public function testYakumanRonWithoutPao()
    {
        $content = file_get_contents(__DIR__ . '/testdata/yakuman_ron_no_pao.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $paoApplyCount = 0;
        foreach ($rounds as $round) {
            if ($round->getPaoPlayerId() != null) {
                $paoApplyCount++;
            }
        }

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(0, $paoApplyCount);
    }

    public function testTripleRonDraw()
    {
        $content = file_get_contents(__DIR__ . '/testdata/triple_ron_draw.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(13, count($rounds));
        $this->assertEquals("abort", $rounds[10]->getOutcome());
    }

    public function testFourKanDraw()
    {
        $content = file_get_contents(__DIR__ . '/testdata/four_kan_draw.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(11, count($rounds));
        $this->assertEquals("abort", $rounds[5]->getOutcome());
    }

    public function testNineTerminalDraw()
    {
        $content = file_get_contents(__DIR__ . '/testdata/nine_terminal_draw.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(12, count($rounds));
        $this->assertEquals("abort", $rounds[1]->getOutcome());
    }

    public function testFourWindDraw()
    {
        $content = file_get_contents(__DIR__ . '/testdata/four_wind_draw.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(12, count($rounds));
        $this->assertEquals("abort", $rounds[7]->getOutcome());
    }

    public function testFourRiichiDraw()
    {
        $content = file_get_contents(__DIR__ . '/testdata/four_riichi_draw.xml');
        list($success, $results, $rounds /*, $debug*/) = (new OnlineParser($this->_ds))
            ->parseToSession($this->_session, $content);

        $this->assertTrue($success);
        $this->assertEquals(
            $results,
            $this->_session->getCurrentState()->getScores()
        );
        $this->assertEquals(13, count($rounds));
        $this->assertEquals("abort", $rounds[6]->getOutcome());
    }
}
