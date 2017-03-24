<?php

namespace Ecc\Topic\Controller;
use Ecc\Topic\Service\CateService;
use Ecc\Topic\Service\PostService;
use Ecc\Topic\Service\SettingService;

/**
 * Class BackendViewController
 * @desc handle view about backend
 * @package Ecc\Topic\Controller
 */
class BackendViewController extends \Vino\BaseController{

    private function _getUser() 
    {
        return $this->di('session')->get('user');
    }
    /**
     * render index page
     */
    public function indexAction()
    {
      	$view = $this->di('twig');
      	echo $view->render('@admin/index.html', array(
      		'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'type'          => 'index',
            'user'          => $this->_getUser(),
            'page'          => 'home'
      	));
    }

    /**
     * render post publish page
     */
    public function markdownAction()
    {
        $view = $this->di('twig');

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        echo $view->render('@admin/markdown.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'user'          => $this->_getUser(),
            'page'          => 'new',
            'cates'         => $cate_data
        ));
    }

    /**
     * render post edit page
     * @param $id
     */
    public function editAction($id)
    {
        if(empty($id)) return;

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        $post = new PostService();
        $post_data = $post->listOne('id', $id);
        $attritube = $post->getAttribute($id);

        $label = $category = '';

        foreach($attritube as $value){
            if ($value['type'] === 'label') {
                $label .= $value['label'].',';
            }
            else {
                $category .= $value['label'].',';
            }
        }

        $label = rtrim($label, ',');
        $category = rtrim($category, ',');

        $view = $this->di('twig');

        echo $view->render('@admin/markdown-edit.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'user'          => $this->_getUser(),
            'page'          => 'post',
            'id'            => $id,
            'cates'         => $cate_data,
            'title'         => $post_data[0]['post_title'],
            'content'       => urlencode($post_data[0]['post_md']),
            'category'      => $category,
            'label'         => $label,
            'thumb'         => $post_data[0]['post_thumb']
        ));

    }

    /**
     * render category page
     */
    public function categoryAction()
    {
        $view = $this->di('twig');

        $cate = new CateService();
        $data  = $cate->listAll();

        echo $view->render('@admin/category.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'user'          => $this->_getUser(),
            'page'          => 'category',
            'datas'         => $data,
            'edit_prefix'   => BASE_URL.'admin/category/edit/'
        ));
    }

    /**
     * render category edit page
     */
    public function categoryEditAction($id)
    {
        $view = $this->di('twig');

        $cate = new CateService();
        $data  = $cate->listOne($id);

        echo $view->render('@admin/category-edit.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'page'          => 'category',
            'user'          => $this->_getUser(),
            'name'          => $data[0]['name'],
            'slug'          => $data[0]['slug'],
            'term_id'       => $data[0]['term_id']
        ));
    }

    /**
     * render post list page
     */
    public function postAction()
    {
        $post = new PostService();
        $post_data = $post->listAll();
        $total = $post->getPages();

        $cate = new CateService();
        $cate_data = $cate->listAll();

        $view = $this->di('twig');
        echo $view->render('@admin/post.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'user'          => $this->_getUser(),
            'page'          => 'post',
            'datas'         => $post_data,
            'cates'         => $cate_data,
            'total'         => $total,
            'edit_prefix'   => BASE_URL.'/admin/edit/',
            'del_prefix'    => BASE_URL.'/admin/delete/'
        ));
    }

    /**
     * render login page
     */
    public function loginAction()
    {
        $view = $this->di('twig');
        echo $view->render('@admin/login.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL
        ));
    }

    /**
     * render setting page
     */
    public function settingAction()
    {
        $set = new SettingService();
        $ret = $set->getSettings();

        $view = $this->di('twig');

        echo $view->render('@admin/setting.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'user'          => $this->_getUser(),
            'page'          => 'setting',
            'title'         => $ret['site_title'],
            'desc'          => $ret['site_desc'],
            'email'         => $ret['site_email'],
            'logo'          => $ret['site_logo'],
            'thumbnail'     => $ret['site_thumbnail'],
            'banner1'       => $ret['banner1'],
            'banner2'       => $ret['banner2'],
            'banner3'       => $ret['banner3'],
            'banner4'       => $ret['banner4']
        ));
    }

}
