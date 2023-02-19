<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Penalty</code>
 */
class Penalty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 who = 1;</code>
     */
    protected $who = 0;
    /**
     * Generated from protobuf field <code>int32 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>optional string reason = 3;</code>
     */
    protected $reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $who
     *     @type int $amount
     *     @type string $reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 who = 1;</code>
     * @return int
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Generated from protobuf field <code>int32 who = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setWho($var)
    {
        GPBUtil::checkInt32($var);
        $this->who = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 2;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string reason = 3;</code>
     * @return string
     */
    public function getReason()
    {
        return isset($this->reason) ? $this->reason : '';
    }

    public function hasReason()
    {
        return isset($this->reason);
    }

    public function clearReason()
    {
        unset($this->reason);
    }

    /**
     * Generated from protobuf field <code>optional string reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}

