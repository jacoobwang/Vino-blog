<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/16
 * Time: 11:05
 */
namespace Ecc\Topic\Model;

use Mphp\App;
use Mphp\Db;
use Mphp\QSelect;
use Mphp\QWhere;


class CateModel
{

    private $di;
    private $model;

    /**
     * @var string
     */
    private $table = 'mblog_cate';

    public function __construct() {
        $this->di = App::getSingleton()->getSingleton()->di();
        $this->model = $this->di->get('db');
    }


    public function add($data) {
        $ret = $this->model->insert($this->table, $data) == 1;
        if($ret) {
            return $this->model->getInsertId();
        }
        return $ret;
    }

    public function all() {
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table);
        return $this->model->fetchAll($sel);
    }

    public function one($id) {
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table)
            ->where(QWhere::create()->eq('term_id', $id));
        return $this->model->fetchAll($sel);
    }

    public function del($id) {
        return $this->model->delete($this->table, 'term_id = '.$id, 1);
    }

    public function update($data, $id) {
        return $this->model->update($this->table, $data, QWhere::create()->eq('term_id',$id));
    }

}