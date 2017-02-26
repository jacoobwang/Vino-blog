<?php

namespace Ecc\Topic\Controller;
use Ecc\Topic\Service\CateService;
use Ecc\Topic\Service\PostService;
use Ecc\Topic\Service\SettingService;

/**
 * Class BackendController
 * @desc handle api about backend
 * @package Ecc\Topic\Controller
 */
class BackendController extends \Mphp\BaseController{

    /**
     * do add category method
     */
    public function addCategoryAction(){
        $data = [
            'name'  => $this->getRequest()->post('title'),
            'slug'  => $this->getRequest()->post('slug'),
            'term_group'=> $this->getRequest()->post('parent')
        ];

        $cate = new CateService();
        $ret  = $cate->add($data);

        if($ret) {
            //add success
            $this->getResponse()->jsonResponse(['term_id' => $ret, 'msg' => '添加成功']);
        }
    }

    /**
     * update category method
     */
    public function updateCategoryAction($id){
        $data = [
            'name'  => $this->getRequest()->post('title'),
            'slug'  => $this->getRequest()->post('slug'),
            'term_group'=> $this->getRequest()->post('parent')
        ];

        $cate = new CateService();
        $ret  = $cate->update($data, $id);

        if($ret) {
            //update success
            $this->getResponse()->jsonResponse(['term_id' => $ret, 'msg' => '更新成功']);
        }
    }

    /**
     * do delete category method
     * @param $id
     */
    public function delCategoryAction($id){
        $cate = new CateService();
        $ret  = $cate->del(intval($id));

        if($ret) {
            //del success
            $this->getResponse()->jsonResponse(['msg' => '删除成功']);
        }
    }

    /**
     * do add post method
     */
    public function addPostAction(){
        $data = [
            'post_author' => 1,
            'post_date'   => date('Y-m-d h:i:s'),
            'post_content'=> $this->getRequest()->post('content'),
            'post_md'     => $this->getRequest()->post('md'),
            'post_title'  => $this->getRequest()->post('title'),
            'post_thumb'  => $this->getRequest()->post('thumb'),
            'post_origin' => $this->getRequest()->post('origin')
        ];
        $data['post_desc'] = substr( preg_replace('/[\s]+/s','',strip_tags($data['post_content'])), 0, 210 );
        $cate = $this->getRequest()->post('category');
        $tags = $this->getRequest()->post('tags');

        $post = new PostService();
        $ret  = $post->add($data);

        if ($ret) {
            // 添加分类和标签
            $post->addAttribute($tags, $ret, 'label');
            $post->addAttribute($cate, $ret, 'category');

            $this->getResponse()->jsonResponse(['term_id' => $ret, 'msg' => '添加成功']);
        }
    }

    /**
     * delete post
     * @param $id
     */
    public function deletePostAction($id){
        $data = [
            'post_status' => 'delete'
        ];

        $post = new PostService();
        $ret  = $post->update($data, $id);

        if($ret){
            $this->redirectUrl(BASE_URL.'admin/post');
        }
    }

    /**
     * do update post method
     */
    public function updatePostAction(){
        $data = [
            'post_author' => 1,
            'post_date'   => date('Y-m-d h:i:s'),
            'post_content'=> $this->getRequest()->post('content'),
            'post_md'     => $this->getRequest()->post('md'),
            'post_title'  => $this->getRequest()->post('title'),
            'post_thumb'  => $this->getRequest()->post('thumb'),
            'post_origin' => $this->getRequest()->post('origin')
        ];

        $data['post_desc'] = substr( preg_replace('/[\s]+/s','',strip_tags($data['post_content'])), 0, 300 );
        $id   = $this->getRequest()->post('id');
        $cate = $this->getRequest()->post('category');
        $tags = $this->getRequest()->post('tags');

        $post = new PostService();
        $ret  = $post->update($data, $id);

        if ($ret) {
            // 更新分类和标签
            $post->updateAttribute($tags, $id, 'label');
            $post->updateAttribute($cate, $id, 'category');

            $this->getResponse()->jsonResponse(['term_id' => $ret, 'msg' => '更新成功']);
        }
    }

    /**
     * do update setting method
     */
    public function updateSettingAction(){
        $data = $this->getRequest()->post();

        if (!empty($data)) {
            $set = new SettingService();
            $ret = $set->updateSettingById($data, 1);

            if ($ret) {
                //update success
                $this->getResponse()->jsonResponse('success');
            }
        }
    }

    /**
     * 分页
     * @param $num
     * @return bool
     */
    public function pageAction($num){
        $post       = new PostService();
        $post_data  = $post->listAll($num);

        $set = new SettingService();
        $set_data = $set->getSettings();

        $html = '';

        if(count($post_data) == 0){
            return false;
        }
        foreach($post_data as $post){
            if(strlen($post['post_thumb']) == 0){
                $post['post_thumb'] = $set_data['site_thumbnail'];
            }
            $html .= '<tr class="gradeX">
                        <td><img src="'.$post['post_thumb'].'" class="tpl-table-line-img" alt=""></td>
                        <td class="am-text-middle">'.$post['post_title'].'</td>
                        <td class="am-text-middle">'.$post['user_nickname'].'</td>
                        <td class="am-text-middle">'.$post['post_date'].'</td>
                        <td class="am-text-middle">
                            <div class="tpl-table-black-operation">
                                <a href="'.BASE_URL.'admin/edit/'.$post['id'].'">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="'.BASE_URL.'admin/delete/'.$post['id'].'" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>';
        }

        echo json_encode($html);
    }

}
