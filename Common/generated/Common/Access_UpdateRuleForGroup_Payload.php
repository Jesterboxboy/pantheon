<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Access_UpdateRuleForGroup_Payload</code>
 */
class Access_UpdateRuleForGroup_Payload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     */
    protected $ruleId = 0;
    /**
     * Generated from protobuf field <code>.Common.RuleValue ruleValue = 2;</code>
     */
    protected $ruleValue = null;
    /**
     * Generated from protobuf field <code>string ruleType = 3;</code>
     */
    protected $ruleType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ruleId
     *     @type \Common\RuleValue $ruleValue
     *     @type string $ruleType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     * @return int
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ruleId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Common.RuleValue ruleValue = 2;</code>
     * @return \Common\RuleValue|null
     */
    public function getRuleValue()
    {
        return $this->ruleValue;
    }

    public function hasRuleValue()
    {
        return isset($this->ruleValue);
    }

    public function clearRuleValue()
    {
        unset($this->ruleValue);
    }

    /**
     * Generated from protobuf field <code>.Common.RuleValue ruleValue = 2;</code>
     * @param \Common\RuleValue $var
     * @return $this
     */
    public function setRuleValue($var)
    {
        GPBUtil::checkMessage($var, \Common\RuleValue::class);
        $this->ruleValue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ruleType = 3;</code>
     * @return string
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * Generated from protobuf field <code>string ruleType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRuleType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ruleType = $var;

        return $this;
    }

}
