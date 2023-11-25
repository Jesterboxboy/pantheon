<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.PersonEx</code>
 */
class PersonEx extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string city = 2;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string tenhou_id = 3;</code>
     */
    protected $tenhou_id = '';
    /**
     * Generated from protobuf field <code>string title = 4;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string country = 5;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string email = 6;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string phone = 7;</code>
     */
    protected $phone = '';
    /**
     * Generated from protobuf field <code>repeated int32 groups = 8;</code>
     */
    private $groups;
    /**
     * Generated from protobuf field <code>bool has_avatar = 9;</code>
     */
    protected $has_avatar = false;
    /**
     * Generated from protobuf field <code>string last_update = 10;</code>
     */
    protected $last_update = '';
    /**
     * Generated from protobuf field <code>string ms_nickname = 11;</code>
     */
    protected $ms_nickname = '';
    /**
     * Generated from protobuf field <code>int32 ms_account_id = 12;</code>
     */
    protected $ms_account_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $city
     *     @type string $tenhou_id
     *     @type string $title
     *     @type string $country
     *     @type string $email
     *     @type string $phone
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $groups
     *     @type bool $has_avatar
     *     @type string $last_update
     *     @type string $ms_nickname
     *     @type int $ms_account_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 2;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tenhou_id = 3;</code>
     * @return string
     */
    public function getTenhouId()
    {
        return $this->tenhou_id;
    }

    /**
     * Generated from protobuf field <code>string tenhou_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTenhouId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenhou_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 5;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 6;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 7;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 groups = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Generated from protobuf field <code>repeated int32 groups = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->groups = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 9;</code>
     * @return bool
     */
    public function getHasAvatar()
    {
        return $this->has_avatar;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasAvatar($var)
    {
        GPBUtil::checkBool($var);
        $this->has_avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_update = 10;</code>
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Generated from protobuf field <code>string last_update = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLastUpdate($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ms_nickname = 11;</code>
     * @return string
     */
    public function getMsNickname()
    {
        return $this->ms_nickname;
    }

    /**
     * Generated from protobuf field <code>string ms_nickname = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMsNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->ms_nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ms_account_id = 12;</code>
     * @return int
     */
    public function getMsAccountId()
    {
        return $this->ms_account_id;
    }

    /**
     * Generated from protobuf field <code>int32 ms_account_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMsAccountId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ms_account_id = $var;

        return $this;
    }

}

