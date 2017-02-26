<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/16
 * Time: 11:02
 */

namespace Ecc\Topic\Service;

use Ecc\Topic\Model\CateModel;

class CateService {

    private $instance;

    public function __construct(){
        $this->instance = new CateModel();
    }

    public function add($data){
        return $this->instance->add($data);
    }

    public function listAll(){
        return $this->instance->all();
    }

    public function listOne($id){
        return $this->instance->one($id);
    }

    public function del($id){
        return $this->instance->del($id);
    }

    public function update($data, $id){
        return $this->instance->update($data, $id);
    }


}