<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/23
 * Time: 16:03
 */

namespace Ecc\Topic\Model;

use Vino\App;
use Vino\Db;
use Vino\QSelect;
use Vino\QWhere;

class LabelModel
{

    private $di;
    private $model;

    /**
     * @var string
     */
    private $table = 'mblog_label';

    public function __construct(){
        $this->di = App::getSingleton()->getSingleton()->di();
        $this->model = $this->di->get('db');
    }

    public function get($column, $value) {
        $sel = QSelect::create()
            ->selectAll()
            ->from($this->table)
            ->where(QWhere::create()->eq($column, $value)->ne('label',''));
        return $this->model->fetchAll($sel);
    }

    public function add($data) {
        $ret = $this->model->insert($this->table, $data) == 1;
        return $ret;
    }

    public function delete($id, $type, $limit=0){
        return $this->model->delete($this->table, QWhere::create()->eq('post_id', $id)->eq('type', $type), $limit);
    }
}