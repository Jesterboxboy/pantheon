<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Auth_ApproveResetPassword_Response</code>
 */
class Auth_ApproveResetPassword_Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string newTmpPassword = 1;</code>
     */
    protected $newTmpPassword = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $newTmpPassword
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string newTmpPassword = 1;</code>
     * @return string
     */
    public function getNewTmpPassword()
    {
        return $this->newTmpPassword;
    }

    /**
     * Generated from protobuf field <code>string newTmpPassword = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewTmpPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->newTmpPassword = $var;

        return $this;
    }

}
