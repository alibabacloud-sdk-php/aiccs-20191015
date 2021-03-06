<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class ListOuterOrderedNumbersResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $numbers;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'numbers'   => 'Numbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->numbers) {
            $res['Numbers'] = $this->numbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOuterOrderedNumbersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = $map['Numbers'];
            }
        }

        return $model;
    }
}
