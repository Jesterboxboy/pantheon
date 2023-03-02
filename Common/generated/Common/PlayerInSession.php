<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.PlayerInSession</code>
 */
class PlayerInSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>int32 score = 3;</code>
     */
    protected $score = 0;
    /**
     * Generated from protobuf field <code>optional .Common.ReplacementPlayer replacedBy = 4;</code>
     */
    protected $replacedBy = null;
    /**
     * Generated from protobuf field <code>float ratingDelta = 5;</code>
     */
    protected $ratingDelta = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $title
     *     @type int $score
     *     @type \Common\ReplacementPlayer $replacedBy
     *     @type float $ratingDelta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
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
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
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
     * Generated from protobuf field <code>int32 score = 3;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>int32 score = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Common.ReplacementPlayer replacedBy = 4;</code>
     * @return \Common\ReplacementPlayer|null
     */
    public function getReplacedBy()
    {
        return $this->replacedBy;
    }

    public function hasReplacedBy()
    {
        return isset($this->replacedBy);
    }

    public function clearReplacedBy()
    {
        unset($this->replacedBy);
    }

    /**
     * Generated from protobuf field <code>optional .Common.ReplacementPlayer replacedBy = 4;</code>
     * @param \Common\ReplacementPlayer $var
     * @return $this
     */
    public function setReplacedBy($var)
    {
        GPBUtil::checkMessage($var, \Common\ReplacementPlayer::class);
        $this->replacedBy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float ratingDelta = 5;</code>
     * @return float
     */
    public function getRatingDelta()
    {
        return $this->ratingDelta;
    }

    /**
     * Generated from protobuf field <code>float ratingDelta = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRatingDelta($var)
    {
        GPBUtil::checkFloat($var);
        $this->ratingDelta = $var;

        return $this;
    }

}

