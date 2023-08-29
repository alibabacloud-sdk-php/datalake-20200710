<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchCreatePartitionsRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifNotExists;

    /**
     * @example true
     *
     * @var bool
     */
    public $needResult;

    /**
     * @var PartitionInput[]
     */
    public $partitionInputs;

    /**
     * @example test_table_20201223
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogId'       => 'CatalogId',
        'databaseName'    => 'DatabaseName',
        'ifNotExists'     => 'IfNotExists',
        'needResult'      => 'NeedResult',
        'partitionInputs' => 'PartitionInputs',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->ifNotExists) {
            $res['IfNotExists'] = $this->ifNotExists;
        }
        if (null !== $this->needResult) {
            $res['NeedResult'] = $this->needResult;
        }
        if (null !== $this->partitionInputs) {
            $res['PartitionInputs'] = [];
            if (null !== $this->partitionInputs && \is_array($this->partitionInputs)) {
                $n = 0;
                foreach ($this->partitionInputs as $item) {
                    $res['PartitionInputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreatePartitionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IfNotExists'])) {
            $model->ifNotExists = $map['IfNotExists'];
        }
        if (isset($map['NeedResult'])) {
            $model->needResult = $map['NeedResult'];
        }
        if (isset($map['PartitionInputs'])) {
            if (!empty($map['PartitionInputs'])) {
                $model->partitionInputs = [];
                $n                      = 0;
                foreach ($map['PartitionInputs'] as $item) {
                    $model->partitionInputs[$n++] = null !== $item ? PartitionInput::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
