<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetInventoryRequest extends Model {
    protected $_name = [
        'commodityCode' => 'CommodityCode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CommodityCode'] = $this->commodityCode;
        return $res;
    }
    /**
     * @param array $map
     * @return GetInventoryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CommodityCode'])){
            $model->commodityCode = $map['CommodityCode'];
        }
        return $model;
    }
    /**
     * @description commodityCode
     * @var string
     */
    public $commodityCode;

}
