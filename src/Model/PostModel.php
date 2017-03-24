<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/17
 * Time: 14:28
 */
namespace Ecc\Topic\Model;

use Vino\App;
use Vino\Db;
use Vino\QSelect;
use Vino\QWhere;

class PostModel{

    private $di;
    private $model;

    /**
     * @var string
     */
    private $table = 'vino_blog_posts';

    /**
     * @throws \Exception
     */
    public function __construct(){
        $this->di = App::getSingleton()->getSingleton()->di();
        $this->model = $this->di->get('db');
    }

    /**
     * insert
     * @param $data
     * @return bool
     */
    public function add($data) {
        $ret = $this->model->insert($this->table, $data) == 1;
        if($ret) {
            return $this->model->getInsertId();
        }
        return $ret;
    }

    /**
     * fetch all
     * @return mixed
     */
    public function all() {
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table);
        return $this->model->fetchAll($sel);
    }

    /**
     * fetch with conditions
     * @param $colum
     * @param $value
     * @return mixed
     */
    public function get($colum, $value) {
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table)
            ->where(QWhere::create()->eq($colum, $value));
        return $this->model->fetchAll($sel);
    }

    /**
     * update
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id) {
        return $this->model->update($this->table, $data, QWhere::create()->eq('id',$id));
    }

    /**
     * delete
     * @param $column
     * @param $value
     * @param int $limit
     * @return mixed
     */
    public function delete($column, $value, $limit = 0){
        return $this->model->delete($this->table, QWhere::create()->eq($column, $value), $limit);
    }

    /**
     * execute query
     * @param $sql
     * @return mixed
     */
    public function query($sql) {
        return $this->model->fetchAll($sql);
    }


}
