<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_play.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodPlayInfoModel</code>
 */
class VodPlayInfoModel extends \Google\Protobuf\Internal\Message
{
    /**
     * 数据版本
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodPlayInfoModelVersion Version = 10;</code>
     */
    protected $Version = 0;
    /**
     * 唯一ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 状态
     *
     * Generated from protobuf field <code>int32 Status = 2;</code>
     */
    protected $Status = 0;
    /**
     * 封面地址
     *
     * Generated from protobuf field <code>string PosterUrl = 3;</code>
     */
    protected $PosterUrl = '';
    /**
     * 播放时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     */
    protected $Duration = 0.0;
    /**
     * 媒体类型
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     */
    protected $FileType = '';
    /**
     * 是否关键针对齐
     *
     * Generated from protobuf field <code>bool EnableAdaptive = 6;</code>
     */
    protected $EnableAdaptive = false;
    /**
     * 播放列表数量
     *
     * Generated from protobuf field <code>int32 TotalCount = 7;</code>
     */
    protected $TotalCount = 0;
    /**
     * dash播放信息
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodAdaptiveInfo AdaptiveInfo = 8;</code>
     */
    protected $AdaptiveInfo = null;
    /**
     * 播放列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfo PlayInfoList = 9;</code>
     */
    private $PlayInfoList;
    /**
     * 雪碧图列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodThumbInfo ThumbInfoList = 11;</code>
     */
    private $ThumbInfoList;
    /**
     * 弹幕蒙版url
     *
     * Generated from protobuf field <code>string BarrageMaskUrl = 12;</code>
     */
    protected $BarrageMaskUrl = '';
    /**
     * 字幕信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSubtitleInfo SubtitleInfoList = 13;</code>
     */
    private $SubtitleInfoList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Version
     *           数据版本
     *     @type string $Vid
     *           唯一ID
     *     @type int $Status
     *           状态
     *     @type string $PosterUrl
     *           封面地址
     *     @type float $Duration
     *           播放时长(单位：s)
     *     @type string $FileType
     *           媒体类型
     *     @type bool $EnableAdaptive
     *           是否关键针对齐
     *     @type int $TotalCount
     *           播放列表数量
     *     @type \Volc\Service\Vod\Models\Business\VodAdaptiveInfo $AdaptiveInfo
     *           dash播放信息
     *     @type \Volc\Service\Vod\Models\Business\VodPlayInfo[]|\Google\Protobuf\Internal\RepeatedField $PlayInfoList
     *           播放列表
     *     @type \Volc\Service\Vod\Models\Business\VodThumbInfo[]|\Google\Protobuf\Internal\RepeatedField $ThumbInfoList
     *           雪碧图列表
     *     @type string $BarrageMaskUrl
     *           弹幕蒙版url
     *     @type \Volc\Service\Vod\Models\Business\VodSubtitleInfo[]|\Google\Protobuf\Internal\RepeatedField $SubtitleInfoList
     *           字幕信息列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        parent::__construct($data);
    }

    /**
     * 数据版本
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodPlayInfoModelVersion Version = 10;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * 数据版本
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodPlayInfoModelVersion Version = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Volc\Service\Vod\Models\Business\VodPlayInfoModelVersion::class);
        $this->Version = $var;

        return $this;
    }

    /**
     * 唯一ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 唯一ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 状态
     *
     * Generated from protobuf field <code>int32 Status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * 状态
     *
     * Generated from protobuf field <code>int32 Status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->Status = $var;

        return $this;
    }

    /**
     * 封面地址
     *
     * Generated from protobuf field <code>string PosterUrl = 3;</code>
     * @return string
     */
    public function getPosterUrl()
    {
        return $this->PosterUrl;
    }

    /**
     * 封面地址
     *
     * Generated from protobuf field <code>string PosterUrl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPosterUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->PosterUrl = $var;

        return $this;
    }

    /**
     * 播放时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * 播放时长(单位：s)
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkFloat($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     * 媒体类型
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * 媒体类型
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * 是否关键针对齐
     *
     * Generated from protobuf field <code>bool EnableAdaptive = 6;</code>
     * @return bool
     */
    public function getEnableAdaptive()
    {
        return $this->EnableAdaptive;
    }

    /**
     * 是否关键针对齐
     *
     * Generated from protobuf field <code>bool EnableAdaptive = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAdaptive($var)
    {
        GPBUtil::checkBool($var);
        $this->EnableAdaptive = $var;

        return $this;
    }

    /**
     * 播放列表数量
     *
     * Generated from protobuf field <code>int32 TotalCount = 7;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * 播放列表数量
     *
     * Generated from protobuf field <code>int32 TotalCount = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

    /**
     * dash播放信息
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodAdaptiveInfo AdaptiveInfo = 8;</code>
     * @return \Volc\Service\Vod\Models\Business\VodAdaptiveInfo
     */
    public function getAdaptiveInfo()
    {
        return $this->AdaptiveInfo;
    }

    /**
     * dash播放信息
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodAdaptiveInfo AdaptiveInfo = 8;</code>
     * @param \Volc\Service\Vod\Models\Business\VodAdaptiveInfo $var
     * @return $this
     */
    public function setAdaptiveInfo($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodAdaptiveInfo::class);
        $this->AdaptiveInfo = $var;

        return $this;
    }

    /**
     * 播放列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfo PlayInfoList = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayInfoList()
    {
        return $this->PlayInfoList;
    }

    /**
     * 播放列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPlayInfo PlayInfoList = 9;</code>
     * @param \Volc\Service\Vod\Models\Business\VodPlayInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodPlayInfo::class);
        $this->PlayInfoList = $arr;

        return $this;
    }

    /**
     * 雪碧图列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodThumbInfo ThumbInfoList = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThumbInfoList()
    {
        return $this->ThumbInfoList;
    }

    /**
     * 雪碧图列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodThumbInfo ThumbInfoList = 11;</code>
     * @param \Volc\Service\Vod\Models\Business\VodThumbInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThumbInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodThumbInfo::class);
        $this->ThumbInfoList = $arr;

        return $this;
    }

    /**
     * 弹幕蒙版url
     *
     * Generated from protobuf field <code>string BarrageMaskUrl = 12;</code>
     * @return string
     */
    public function getBarrageMaskUrl()
    {
        return $this->BarrageMaskUrl;
    }

    /**
     * 弹幕蒙版url
     *
     * Generated from protobuf field <code>string BarrageMaskUrl = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setBarrageMaskUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->BarrageMaskUrl = $var;

        return $this;
    }

    /**
     * 字幕信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSubtitleInfo SubtitleInfoList = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubtitleInfoList()
    {
        return $this->SubtitleInfoList;
    }

    /**
     * 字幕信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSubtitleInfo SubtitleInfoList = 13;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSubtitleInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubtitleInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSubtitleInfo::class);
        $this->SubtitleInfoList = $arr;

        return $this;
    }

}

