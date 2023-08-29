<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchGetTablesResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var TableError[]
     */
    public $tableErrors;

    /**
     * @var Table[]
     */
    public $tables;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'tableErrors' => 'TableErrors',
        'tables'      => 'Tables',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tableErrors) {
            $res['TableErrors'] = [];
            if (null !== $this->tableErrors && \is_array($this->tableErrors)) {
                $n = 0;
                foreach ($this->tableErrors as $item) {
                    $res['TableErrors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetTablesResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TableErrors'])) {
            if (!empty($map['TableErrors'])) {
                $model->tableErrors = [];
                $n                  = 0;
                foreach ($map['TableErrors'] as $item) {
                    $model->tableErrors[$n++] = null !== $item ? TableError::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? Table::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
