<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.AuthQuickAuthorizeResponse</code>
 */
class AuthQuickAuthorizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool auth_success = 1;</code>
     */
    protected $auth_success = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auth_success
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool auth_success = 1;</code>
     * @return bool
     */
    public function getAuthSuccess()
    {
        return $this->auth_success;
    }

    /**
     * Generated from protobuf field <code>bool auth_success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAuthSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->auth_success = $var;

        return $this;
    }

}
