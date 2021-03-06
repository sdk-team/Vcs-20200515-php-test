<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'gbId' => 'GbId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['GbId'] = $this->gbId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteDeviceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description gbId
     * @var string
     */
    public $gbId;

}
