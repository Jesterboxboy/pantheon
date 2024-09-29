<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.Penalty</code>
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
     * Generated from protobuf field <code>int32 assigned_by = 4;</code>
     */
    protected $assigned_by = 0;
    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>bool is_cancelled = 6;</code>
     */
    protected $is_cancelled = false;
    /**
     * Generated from protobuf field <code>optional string cancellation_reason = 7;</code>
     */
    protected $cancellation_reason = null;
    /**
     * Generated from protobuf field <code>int32 id = 8;</code>
     */
    protected $id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $who
     *     @type int $amount
     *     @type string $reason
     *     @type int $assigned_by
     *     @type string $created_at
     *     @type bool $is_cancelled
     *     @type string $cancellation_reason
     *     @type int $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Atoms::initOnce();
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

    /**
     * Generated from protobuf field <code>int32 assigned_by = 4;</code>
     * @return int
     */
    public function getAssignedBy()
    {
        return $this->assigned_by;
    }

    /**
     * Generated from protobuf field <code>int32 assigned_by = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAssignedBy($var)
    {
        GPBUtil::checkInt32($var);
        $this->assigned_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_cancelled = 6;</code>
     * @return bool
     */
    public function getIsCancelled()
    {
        return $this->is_cancelled;
    }

    /**
     * Generated from protobuf field <code>bool is_cancelled = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCancelled($var)
    {
        GPBUtil::checkBool($var);
        $this->is_cancelled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string cancellation_reason = 7;</code>
     * @return string
     */
    public function getCancellationReason()
    {
        return isset($this->cancellation_reason) ? $this->cancellation_reason : '';
    }

    public function hasCancellationReason()
    {
        return isset($this->cancellation_reason);
    }

    public function clearCancellationReason()
    {
        unset($this->cancellation_reason);
    }

    /**
     * Generated from protobuf field <code>optional string cancellation_reason = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCancellationReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->cancellation_reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 id = 8;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

}

