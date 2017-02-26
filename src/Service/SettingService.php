<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/20
 * Time: 17:37
 */

namespace Ecc\Topic\Service;

use Ecc\Topic\Model\SettingModel;

class SettingService
{
    private $instance;

    public function __construct(){
        $this->instance = new SettingModel();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function updateSettingById($data) {
        return $this->instance->update($data, 1);
    }

    /**
     * @return mixed
     */
    public function getSettings() {
        return $this->instance->get();
    }

}