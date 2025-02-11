<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $channelType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var int
     */
    public $skillGroupId;
    /**
     * @var string
     */
    public $skillGroupName;
    protected $_name = [
        'channelType'    => 'ChannelType',
        'description'    => 'Description',
        'displayName'    => 'DisplayName',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }

        return $model;
    }
}
