<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class StopMonitorRequest extends Model {
    protected $_name = [
        'taskId' => 'TaskId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['TaskId'] = $this->taskId;
        return $res;
    }
    /**
     * @param array $map
     * @return StopMonitorRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        return $model;
    }
    /**
     * @description taskId
     * @var string
     */
    public $taskId;

}
