<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/17
 * Time: 14:27
 */

namespace Ecc\Topic\Service;

use Ecc\Topic\Model\LabelModel;
use Ecc\Topic\Model\PostModel;

class PostService {
    /**
     * @var PostModel
     */
    private $instance;

    /**
     * @var 每页数量
     */
    public $num = 4;

    /**
     * 实例化model
     */
    public function __construct(){
        $this->instance = new PostModel();
    }

    /**
     * 添加post
     * @param $data
     * @return bool
     */
    public function add($data){
        return $this->instance->add($data);
    }

    /**
     * 获取list列表
     * @return mixed
     */
    public function listAll($cur = 1){
        $num = $this->num; //每页数量
        $start = $num * ($cur -1); //分页的初始行

        $sql = 'SELECT vino_blog_posts.*,vino_blog_users.user_nickname FROM vino_blog_posts LEFT JOIN vino_blog_users ON vino_blog_posts.post_author = vino_blog_users.id WHERE post_status = \'publish\' ORDER BY id DESC LIMIT '. $start .','. $num ;
        $ret = $this->instance->query($sql);

        /**
            if($ret) {
                foreach ($ret as $k => $val) {
                    $cate_sql = 'SELECT cate.* FROM vino_blog_cate cate INNER JOIN vino_blog_label label ON cate.term_id = label.label AND label.post_id = ' . $val['id'];
                    $cate = $this->instance->query($cate_sql);

                    $ret[$k]['category'] = $cate;
                    unset($ret[$k]['post_md']);
                }
            }
        **/
        return $ret;
    }

    /**
     * 获取某一分类下的文章
     * @param $id
     * @param int $num
     * @return mixed
     */
    public function listCategory($id, $cur = 1){
        $num = $this->num; //每页数量
        $start = $num * ($cur -1); //分页的初始行

        $sql = 'SELECT vino_blog_posts.*,vino_blog_users.user_nickname FROM vino_blog_posts INNER JOIN vino_blog_label ON vino_blog_posts.id = vino_blog_label.post_id
 INNER JOIN vino_blog_users ON vino_blog_posts.post_author = vino_blog_users.id WHERE vino_blog_posts.post_status=\'publish\' AND vino_blog_label.label = '. $id .' LIMIT '. $start .','. $num;
        $ret = $this->instance->query($sql);

        return $ret;
    }

    /**
     * 获取某一标签下的文章
     * @param $slug
     * @param int $num
     * @return mixed
     */
    public function listTag($slug, $num=10){
        $sql = 'SELECT vino_blog_posts.*,vino_blog_users.user_nickname FROM vino_blog_posts INNER JOIN vino_blog_label ON vino_blog_posts.id = vino_blog_label.post_id
 LEFT JOIN vino_blog_users ON vino_blog_posts.post_author = vino_blog_users.id WHERE vino_blog_posts.post_status=\'publish\' AND vino_blog_label.label = \''. $slug .'\' LIMIT '.$num;
        $ret = $this->instance->query($sql);

        if($ret) {
            foreach ($ret as $k => $val) {
                $cate_sql = 'SELECT cate.* FROM vino_blog_cate cate INNER JOIN vino_blog_label label ON cate.term_id = label.label AND label.post_id = ' . $val['id'];
                $cate = $this->instance->query($cate_sql);

                $ret[$k]['category'] = $cate;
            }
        }
        return $ret;
    }

    /**
     * 获取一条post
     * @param $column
     * @param $value
     * @return mixed
     */
    public function listOne($column, $value){
        $sql = 'SELECT vino_blog_posts.*,vino_blog_users.user_avatar,vino_blog_users.user_nickname,vino_blog_users.user_profile FROM vino_blog_posts
LEFT JOIN vino_blog_users ON vino_blog_posts.post_author = vino_blog_users.id WHERE vino_blog_posts.'. $column .'='. $value .'  LIMIT 1';
        $ret = $this->instance->query($sql);

        if($ret) {
            foreach ($ret as $k => $val) {

                $cate_sql = 'SELECT cate.* FROM vino_blog_cate cate INNER JOIN vino_blog_label label ON cate.term_id = label.label AND label.post_id = ' . $val['id'];
                $cate = $this->instance->query($cate_sql);

                $ret[$k]['category'] = $cate;
            }
        }
        return $ret;
    }

    /**
     * 更新文章
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id){
        return $this->instance->update($data, $id);
    }

    /**
     * 获取文章属性
     * @param $id
     * @return mixed
     */
    public function getAttribute($id){
        $labelInstance = new LabelModel();
        return $labelInstance->get('post_id', $id);
    }

    /**
     * 添加文章相关标签或分类
     * @param $attribute
     * @param $id
     * @param $type
     */
    public function addAttribute($attribute, $id, $type){
        if ( !is_array($attribute) ) {
            $attribute = explode(',', $attribute);
        }
        $labelInstance = new LabelModel();
        foreach ($attribute as $value) {
            $labelInstance->add([
                'post_id'  => $id,
                'label'    => $value,
                'type'     => $type
            ]);
        }
    }

    /**
     * 删除文章相关的标签及分类
     * @param $id
     * @param $type
     */
    public function delAttritube($id, $type){
        $labelInstance = new LabelModel();
        $labelInstance->delete($id, $type);
    }

    /**
     * 更新文章相关标签或分类
     * @param $attribute
     * @param $id
     * @param $type
     */
    public function updateAttribute($attribute, $id, $type){
        //先delete旧记录
        $labelInstance = new LabelModel();
        $labelInstance->delete($id, $type);

        //更新
        $this->addAttribute($attribute, $id, $type);
    }

    /**
     * 标签云，获取所有标签
     */
    public function getLabels(){
        $labelInstance = new LabelModel();
        return $labelInstance->get('type', 'label');
    }

    /**
     * 获取banner
     * @param $id
     * @return mixed
     */
    public function getBanner($id){
        $sql = 'SELECT id,post_title,post_desc,post_date,post_author,post_origin FROM vino_blog_posts WHERE id IN ('. $id .')';
        $ret = $this->instance->query($sql);

        return $ret;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getNext($id){
        $sql = 'SELECT id,post_title FROM vino_blog_posts WHERE id > '. $id .' LIMIT 1';
        $ret = $this->instance->query($sql);

        return $ret;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getLast($id){
        $sql = 'SELECT id,post_title FROM vino_blog_posts WHERE id < '. $id .' ORDER BY id DESC LIMIT 1';
        $ret = $this->instance->query($sql);

        return $ret;
    }

    /**
     * @param string $cat
     * @return int
     */
    public function getPages($cat = ''){
        if (empty($cat)) {
            $sql = 'SELECT count(id) AS total FROM vino_blog_posts WHERE post_status = \'publish\'';
        } else {
            $sql = 'SELECT count(id) AS total FROM vino_blog_posts WHERE post_status = \'publish\' AND id in (SELECT post_id FROM vino_blog_label WHERE label='.$cat.' AND type=\'category\')';
        }

        $ret = $this->instance->query($sql);

        $total = $ret[0]['total'];
        return ceil($total/$this->num);
    }

}