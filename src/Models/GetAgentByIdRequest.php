<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetAgentByIdRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $agentId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'agentId'    => 'AgentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        return $model;
    }
}
