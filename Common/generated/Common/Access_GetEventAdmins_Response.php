<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Access_GetEventAdmins_Response</code>
 */
class Access_GetEventAdmins_Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Common.EventAdmin admins = 1;</code>
     */
    private $admins;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Common\EventAdmin>|\Google\Protobuf\Internal\RepeatedField $admins
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Common.EventAdmin admins = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Generated from protobuf field <code>repeated .Common.EventAdmin admins = 1;</code>
     * @param array<\Common\EventAdmin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdmins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\EventAdmin::class);
        $this->admins = $arr;

        return $this;
    }

}
