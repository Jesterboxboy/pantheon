<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Events_GetTimezones_Payload</code>
 */
class Events_GetTimezones_Payload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string addr = 1;</code>
     */
    protected $addr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $addr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;

        return $this;
    }

}
