<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class LlmSmartCallRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example F32XXX2CF9
     *
     * @var string
     */
    public $applicationCode;

    /**
     * @description This parameter is required.
     *
     * @example 137****0000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 057188040000
     *
     * @var string
     */
    public $callerNumber;

    /**
     * @example 222356****
     *
     * @var string
     */
    public $outId;

    /**
     * @var mixed[]
     */
    public $promptParam;

    /**
     * @var mixed[]
     */
    public $startWordParam;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'calledNumber'    => 'CalledNumber',
        'callerNumber'    => 'CallerNumber',
        'outId'           => 'OutId',
        'promptParam'     => 'PromptParam',
        'startWordParam'  => 'StartWordParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->promptParam) {
            $res['PromptParam'] = $this->promptParam;
        }
        if (null !== $this->startWordParam) {
            $res['StartWordParam'] = $this->startWordParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LlmSmartCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PromptParam'])) {
            $model->promptParam = $map['PromptParam'];
        }
        if (isset($map['StartWordParam'])) {
            $model->startWordParam = $map['StartWordParam'];
        }

        return $model;
    }
}