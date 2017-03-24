<?php

namespace Ecc\Topic\Controller;

use Ecc\Topic\Service\CateService;
use Ecc\Topic\Service\PostService;
use Ecc\Topic\Service\SettingService;

class PostController extends \Vino\BaseController{


    /**
     * render index page
     */
    public function indexAction(){
        $set = new SettingService();
        $set_data = $set->getSettings();

        $cate = new CateService();
        $cate_data  = $cate->listAll();

        $post = new PostService();
        $post_data = $post->listAll();

      	$view = $this->di('twig');
      	echo $view->render('@front/index.html', array(
      		'JS_CSS_DOMAIN' => BASE_URL.'/templates/frontend/',
      		'title'         => $set_data['site_title'],
            'description'   => $set_data['site_desc'],
            'logo'          => $set_data['site_logo'],
            'posts'         => $post_data,
            'category'      => $cate_data
      	));
    }

    /**
     * render index page
     */
    public function renderAction($id){
        $post = new PostService();
        $post_data = $post->listOne('id', $id);

        $view = $this->di('twig');
        echo $view->render('@front/lw-article-fullwidth.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/frontend/',
            'title'         => $post_data[0]['post_title'],
            'author'        => $post_data[0]['post_author'],
            'content'       => $post_data[0]['post_content']
        ));
    }

}
