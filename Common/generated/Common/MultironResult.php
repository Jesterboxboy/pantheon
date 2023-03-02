<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.MultironResult</code>
 */
class MultironResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 roundIndex = 1;</code>
     */
    protected $roundIndex = 0;
    /**
     * Generated from protobuf field <code>int32 loserId = 3;</code>
     */
    protected $loserId = 0;
    /**
     * count of players who won
     *
     * Generated from protobuf field <code>int32 multiRon = 4;</code>
     */
    protected $multiRon = 0;
    /**
     * Generated from protobuf field <code>repeated .Common.MultironWin wins = 5;</code>
     */
    private $wins;
    /**
     * player ids
     *
     * Generated from protobuf field <code>repeated int32 riichiBets = 6;</code>
     */
    private $riichiBets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $roundIndex
     *     @type int $loserId
     *     @type int $multiRon
     *           count of players who won
     *     @type array<\Common\MultironWin>|\Google\Protobuf\Internal\RepeatedField $wins
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $riichiBets
     *           player ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 roundIndex = 1;</code>
     * @return int
     */
    public function getRoundIndex()
    {
        return $this->roundIndex;
    }

    /**
     * Generated from protobuf field <code>int32 roundIndex = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRoundIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->roundIndex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 loserId = 3;</code>
     * @return int
     */
    public function getLoserId()
    {
        return $this->loserId;
    }

    /**
     * Generated from protobuf field <code>int32 loserId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLoserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->loserId = $var;

        return $this;
    }

    /**
     * count of players who won
     *
     * Generated from protobuf field <code>int32 multiRon = 4;</code>
     * @return int
     */
    public function getMultiRon()
    {
        return $this->multiRon;
    }

    /**
     * count of players who won
     *
     * Generated from protobuf field <code>int32 multiRon = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMultiRon($var)
    {
        GPBUtil::checkInt32($var);
        $this->multiRon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Common.MultironWin wins = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * Generated from protobuf field <code>repeated .Common.MultironWin wins = 5;</code>
     * @param array<\Common\MultironWin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\MultironWin::class);
        $this->wins = $arr;

        return $this;
    }

    /**
     * player ids
     *
     * Generated from protobuf field <code>repeated int32 riichiBets = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRiichiBets()
    {
        return $this->riichiBets;
    }

    /**
     * player ids
     *
     * Generated from protobuf field <code>repeated int32 riichiBets = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRiichiBets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->riichiBets = $arr;

        return $this;
    }

}

