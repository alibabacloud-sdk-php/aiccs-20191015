<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponseBody\data;

use AlibabaCloud\Tea\Model;

class qualityRuleList extends Model
{
    /**
     * @var int
     */
    public $ruleTag;

    /**
     * @var int
     */
    public $matchType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleCreateTime;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string[]
     */
    public $keyWords;
    protected $_name = [
        'ruleTag'        => 'RuleTag',
        'matchType'      => 'MatchType',
        'name'           => 'Name',
        'ruleCreateTime' => 'RuleCreateTime',
        'ruleId'         => 'RuleId',
        'keyWords'       => 'KeyWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleTag) {
            $res['RuleTag'] = $this->ruleTag;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleCreateTime) {
            $res['RuleCreateTime'] = $this->ruleCreateTime;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleTag'])) {
            $model->ruleTag = $map['RuleTag'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCreateTime'])) {
            $model->ruleCreateTime = $map['RuleCreateTime'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }

        return $model;
    }
}
