<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetIndexCurrentValueRequest extends Model
{
    /**
     * @var string
     */
    public $depIds;

    /**
     * @var string
     */
    public $groupIds;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'depIds'     => 'DepIds',
        'groupIds'   => 'GroupIds',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depIds) {
            $res['DepIds'] = $this->depIds;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexCurrentValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepIds'])) {
            $model->depIds = $map['DepIds'];
        }
        if (isset($map['GroupIds'])) {
            $model->groupIds = $map['GroupIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
