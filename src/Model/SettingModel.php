<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/20
 * Time: 17:43
 */

namespace Ecc\Topic\Model;

use Vino\App;
use Vino\Db;
use Vino\QSelect;
use Vino\QWhere;

class SettingModel
{
    private $di;
    private $model;

    /**
     * @var string
     */
    private $table = 'vino_blog_setting';

    /**
     * @throws \Exception
     */
    public function __construct(){
        $this->di = App::getSingleton()->getSingleton()->di();
        $this->model = $this->di->get('db');
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id){
        return $this->model->update($this->table, $data, QWhere::create()->eq('id',$id));
    }

    /**
     * @return mixed
     */
    public function get(){
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table);

        return $this->model->fetchRow($sel);
    }

}