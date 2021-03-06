<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: imp/business/imp_common.proto

namespace Volc\Service\Imp\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Imp.Models.Business.InputPath</code>
 */
class InputPath extends \Google\Protobuf\Internal\Message
{
    /**
     * 可选：VOD TOS
     *
     * Generated from protobuf field <code>string Type = 1;</code>
     */
    protected $Type = '';
    /**
     * Generated from protobuf field <code>string TosBucket = 2;</code>
     */
    protected $TosBucket = '';
    /**
     * Generated from protobuf field <code>string VodSpaceName = 3;</code>
     */
    protected $VodSpaceName = '';
    /**
     * Generated from protobuf field <code>string FileId = 4;</code>
     */
    protected $FileId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Type
     *           可选：VOD TOS
     *     @type string $TosBucket
     *     @type string $VodSpaceName
     *     @type string $FileId
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Imp\Models\GPBMetadata\ImpCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * 可选：VOD TOS
     *
     * Generated from protobuf field <code>string Type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * 可选：VOD TOS
     *
     * Generated from protobuf field <code>string Type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TosBucket = 2;</code>
     * @return string
     */
    public function getTosBucket()
    {
        return $this->TosBucket;
    }

    /**
     * Generated from protobuf field <code>string TosBucket = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTosBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->TosBucket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string VodSpaceName = 3;</code>
     * @return string
     */
    public function getVodSpaceName()
    {
        return $this->VodSpaceName;
    }

    /**
     * Generated from protobuf field <code>string VodSpaceName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVodSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->VodSpaceName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileId = 4;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->FileId;
    }

    /**
     * Generated from protobuf field <code>string FileId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileId = $var;

        return $this;
    }

}

