<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.MultironWin</code>
 */
class MultironWin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 winnerId = 1;</code>
     */
    protected $winnerId = 0;
    /**
     * Generated from protobuf field <code>int32 paoPlayerId = 2;</code>
     */
    protected $paoPlayerId = 0;
    /**
     * Generated from protobuf field <code>int32 han = 3;</code>
     */
    protected $han = 0;
    /**
     * Generated from protobuf field <code>int32 fu = 4;</code>
     */
    protected $fu = 0;
    /**
     * yaku ids
     *
     * Generated from protobuf field <code>repeated int32 yaku = 5;</code>
     */
    private $yaku;
    /**
     * Generated from protobuf field <code>int32 dora = 6;</code>
     */
    protected $dora = 0;
    /**
     * Generated from protobuf field <code>int32 uradora = 7;</code>
     */
    protected $uradora = 0;
    /**
     * Generated from protobuf field <code>int32 kandora = 8;</code>
     */
    protected $kandora = 0;
    /**
     * Generated from protobuf field <code>int32 kanuradora = 9;</code>
     */
    protected $kanuradora = 0;
    /**
     * Generated from protobuf field <code>bool openHand = 10;</code>
     */
    protected $openHand = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $winnerId
     *     @type int $paoPlayerId
     *     @type int $han
     *     @type int $fu
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $yaku
     *           yaku ids
     *     @type int $dora
     *     @type int $uradora
     *     @type int $kandora
     *     @type int $kanuradora
     *     @type bool $openHand
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 winnerId = 1;</code>
     * @return int
     */
    public function getWinnerId()
    {
        return $this->winnerId;
    }

    /**
     * Generated from protobuf field <code>int32 winnerId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setWinnerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->winnerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 paoPlayerId = 2;</code>
     * @return int
     */
    public function getPaoPlayerId()
    {
        return $this->paoPlayerId;
    }

    /**
     * Generated from protobuf field <code>int32 paoPlayerId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPaoPlayerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->paoPlayerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 han = 3;</code>
     * @return int
     */
    public function getHan()
    {
        return $this->han;
    }

    /**
     * Generated from protobuf field <code>int32 han = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHan($var)
    {
        GPBUtil::checkInt32($var);
        $this->han = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 fu = 4;</code>
     * @return int
     */
    public function getFu()
    {
        return $this->fu;
    }

    /**
     * Generated from protobuf field <code>int32 fu = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFu($var)
    {
        GPBUtil::checkInt32($var);
        $this->fu = $var;

        return $this;
    }

    /**
     * yaku ids
     *
     * Generated from protobuf field <code>repeated int32 yaku = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYaku()
    {
        return $this->yaku;
    }

    /**
     * yaku ids
     *
     * Generated from protobuf field <code>repeated int32 yaku = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYaku($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->yaku = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 dora = 6;</code>
     * @return int
     */
    public function getDora()
    {
        return $this->dora;
    }

    /**
     * Generated from protobuf field <code>int32 dora = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDora($var)
    {
        GPBUtil::checkInt32($var);
        $this->dora = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 uradora = 7;</code>
     * @return int
     */
    public function getUradora()
    {
        return $this->uradora;
    }

    /**
     * Generated from protobuf field <code>int32 uradora = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setUradora($var)
    {
        GPBUtil::checkInt32($var);
        $this->uradora = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 kandora = 8;</code>
     * @return int
     */
    public function getKandora()
    {
        return $this->kandora;
    }

    /**
     * Generated from protobuf field <code>int32 kandora = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setKandora($var)
    {
        GPBUtil::checkInt32($var);
        $this->kandora = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 kanuradora = 9;</code>
     * @return int
     */
    public function getKanuradora()
    {
        return $this->kanuradora;
    }

    /**
     * Generated from protobuf field <code>int32 kanuradora = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKanuradora($var)
    {
        GPBUtil::checkInt32($var);
        $this->kanuradora = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool openHand = 10;</code>
     * @return bool
     */
    public function getOpenHand()
    {
        return $this->openHand;
    }

    /**
     * Generated from protobuf field <code>bool openHand = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setOpenHand($var)
    {
        GPBUtil::checkBool($var);
        $this->openHand = $var;

        return $this;
    }

}

