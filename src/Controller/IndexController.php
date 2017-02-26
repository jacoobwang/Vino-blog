<?php

namespace Ecc\Topic\Controller;

use Ecc\Topic\Service\CateService;
use Ecc\Topic\Service\PostService;
use Ecc\Topic\Service\SettingService;
use Ecc\Topic\Service\UserService;

class IndexController extends \Mphp\BaseController{


    /**
     * render index page
     */
    public function indexAction(){
        $set = new SettingService();
        $set_data = $set->getSettings();

        $ids = '';
        $banner_ids = array($set_data['banner1'],$set_data['banner2'],$set_data['banner3'],$set_data['banner4']);
        foreach($banner_ids as $id){
            if (preg_match('/post\/(\d+)/',$id,$match)) {
                $ids .= $match[1].',';
            }
        }

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        $post       = new PostService();
        $post_data  = $post->listAll();
        $label_data = $post->getLabels();
        $banner_data= $post->getBanner(rtrim($ids, ','));
        $total      = $post->getPages();

        $admin = new UserService();
        $admin_data = $admin->getUserById('user_power', 'admin');

      	$view = $this->di('twig');
      	echo $view->render('@front/index.html', array(
      		'JS_CSS_DOMAIN' => BASE_URL.'templates/frontend/',
            'DOMAIN'        => BASE_URL,
      		'title'         => $set_data['site_title'],
            'description'   => $set_data['site_desc'],
            'logo'          => $set_data['site_logo'],
            'posts'         => $post_data,
            'category'      => $cate_data,
            'admin_avatar'  => $admin_data['user_avatar'],
            'admin_name'    => $admin_data['user_nickname'],
            'admin_profile' => preg_replace('/\s+/','</p><p>',$admin_data['user_profile']),
            'admin_github'  => $admin_data['user_github'],
            'admin_weibo'   => $admin_data['user_weibo'],
            'labels'        => $label_data,
            'banners'       => $banner_data,
            'total'         => $total,
            'page'          => 'home'
      	));
    }

    /**
     * render category page
     * @param $slug
     */
    public function categoryAction($slug){
        $set = new SettingService();
        $set_data = $set->getSettings();

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        $cat_id = 0;
        foreach($cate_data as $value) {
            if ($value['slug'] === $slug) {
                $cat_id = $value['term_id'];
            }
        }

        $post = new PostService();
        $post_data = $post->listCategory($cat_id);
        $total     = $post->getPages($cat_id);

        $view = $this->di('twig');
        echo $view->render('@front/category.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'templates/frontend/',
            'DOMAIN'        => BASE_URL,
            'title'         => $set_data['site_title'],
            'description'   => $set_data['site_desc'],
            'logo'          => $set_data['site_logo'],
            'posts'         => $post_data,
            'category'      => $cate_data,
            'total'         => $total,
            'catId'         => $cat_id,
            'page'          => $slug
        ));
    }

    /**
     * render label page
     * @param $slug
     */
    public function tagAction($slug){
        $set = new SettingService();
        $set_data = $set->getSettings();

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        $post = new PostService();
        $post_data = $post->listTag(urldecode($slug));

        $view = $this->di('twig');
        echo $view->render('@front/category.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'templates/frontend/',
            'DOMAIN'        => BASE_URL,
            'title'         => $set_data['site_title'],
            'description'   => $set_data['site_desc'],
            'logo'          => $set_data['site_logo'],
            'posts'         => $post_data,
            'category'      => $cate_data,
            'page'          => $slug
        ));
    }

    /**
     * render post page
     */
    public function postAction($id){
        $set        = new SettingService();
        $set_data   = $set->getSettings();

        $cate       = new CateService();
        $cate_data  = $cate->listAll();

        $post       = new PostService();
        $post_data  = $post->listOne('id', $id);
        $next_data  = $post->getNext($id);
        $last_data  = $post->getLast($id);

        $label_data = [];
        $attr_data  = $post->getAttribute($id);
        foreach($attr_data as $value) {
            if ($value['type'] === 'label') {
                $label_data[] = $value;
            }
        }

        $view = $this->di('twig');
        echo $view->render('@front/post.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'templates/frontend/',
            'DOMAIN'        => BASE_URL,
            'title'         => $post_data[0]['post_title'],
            'author'        => $post_data[0]['user_nickname'],
            'author_profile'=> $post_data[0]['user_profile'],
            'author_avatar' => $post_data[0]['user_avatar'],
            'content'       => $post_data[0]['post_content'],
            'post_cates'    => $post_data[0]['category'],
            'date'          => $post_data[0]['post_date'],
            'last_id'       => $last_data[0]['id'],
            'last_title'    => $last_data[0]['post_title'],
            'next_id'       => $next_data[0]['id'],
            'next_title'    => $next_data[0]['post_title'],
            'category'      => $cate_data,
            'labels'        => $label_data,
            'logo'          => $set_data['site_logo']
        ));
    }

    /**
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
            if(strlen($post['post_origin']) == 0){
                $post['post_origin'] = $set_data['site_thumbnail'];
            }

            $html .= '<article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="'.$post['post_origin'].'" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span> @'.$post['user_nickname'].' &nbsp;</span>
                    <span>'.$post['post_date'].'</span>
                    <h1><a target="_blank" href="post/'.$post['id'].'">'.$post['post_title'].'</a></h1>
                    <p>'.$post['post_desc'].'...</p>
                    <p><a target="_blank" href="post/'.$post['id'].'" class="blog-continue">continue reading</a></p>
                </div>
            </article>';
        }

        echo $html;
    }

    /**
     * 类目分页
     * @param $cat
     * @param $num
     */
    public function pageCateAction($cat, $num){
        $post       = new PostService();
        $post_data  = $post->listCategory($cat, $num);

        $set = new SettingService();
        $set_data = $set->getSettings();

        $html = '';

        foreach($post_data as $post){
            $html .= '<article class="am-g blog-entry-article">
                        <div class="am-u-md-12 am-u-sm-12 blog-entry-text">
                            <span> @'.$post['user_nickname'].' &nbsp;</span>
                            <span> '.$post['post_date'].'</span>
                            <h1><a target="_blank" href="post/'.$post['id'].'">'.$post['post_title'].'</a></h1>
                            <p>'.$post['post_desc'].'...</p>
                        </div>
                      </article>';
        }

        echo $html;
    }

}
