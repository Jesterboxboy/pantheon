<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.PersonsFindByMajsoulIdsPayload</code>
 */
class PersonsFindByMajsoulIdsPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .common.MajsoulSearchEx ids = 1;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Common\MajsoulSearchEx>|\Google\Protobuf\Internal\RepeatedField $ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .common.MajsoulSearchEx ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated .common.MajsoulSearchEx ids = 1;</code>
     * @param array<\Common\MajsoulSearchEx>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\MajsoulSearchEx::class);
        $this->ids = $arr;

        return $this;
    }

}

