<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetQualityProjectListResponseBody extends Model
{
    /**
     * @description Message
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Data
     *
     * @var data
     */
    public $data;

    /**
     * @description Code
     *
     * @var string
     */
    public $code;

    /**
     * @description Success
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'data'      => 'Data',
        'code'      => 'Code',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityProjectListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
