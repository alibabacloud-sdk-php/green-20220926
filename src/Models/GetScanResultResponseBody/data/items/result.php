<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 50.0
     *
     * @var string
     */
    public $confidence;

    /**
     * @example politics
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'confidence' => 'Confidence',
        'label'      => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}