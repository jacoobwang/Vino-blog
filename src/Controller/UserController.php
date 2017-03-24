<?php

namespace Ecc\Topic\Controller;

use Ecc\Topic\Service\UserService;

class UserController extends \Vino\BaseController{

    /**
     * 用户
     */
    public function userAction(){
        $session = $this->di('session');
        $user_login = $session->get('user');

        $user = new UserService();
        $data = $user->getUserById('user_login', $user_login);

        $view = $this->di('twig');
        echo $view->render('@admin/user.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/backend/',
            'DOMAIN'        => BASE_URL,
            'page'          => 'user',
            'user'          => $user_login,
            'nickname'      => $data['user_nickname'],
            'email'         => $data['user_email'],
            'profile'       => $data['user_profile'],
            'avatar'        => $data['user_avatar'],
            'github'        => $data['user_github'],
            'weibo'         => $data['user_weibo']
        ));
    }

    /**
     * 注册页面
     */
    public function registerAction(){
        $view = $this->di('twig');
        echo $view->render('@front/reg.html', array(
            'JS_CSS_DOMAIN' => BASE_URL.'/templates/frontend/'
        ));
    }

    /**
     * 登入
     */
    public function loginAction(){
        $data = [
            'user_login' => $this->getRequest()->post('user'),
            'user_pass'  => $this->getRequest()->post('pwd')
        ];

        // vaildate post data 
        $validator = $this->getValidator()->make($data, [
            'user_login' => ['required|min:4','用户名字数不能少于4'],
            'user_pass'  => ['required|min:6','密码最小长度为6位']
        ]);

        // if fail return errors to response
        if($validator->fails()) {
            $this->getResponse()->jsonResponse($validator->message(),2);
            exit;
        }

        $user = new UserService();
        $ret = $user->findUser($data['user_login'], $data['user_pass']);
        
        if ($ret) {
            unset($data['user_pass']);
            $session = $this->di('session');
            $session->set('user', $data['user_login']);
            $this->getResponse()->jsonResponse($data);
        } else {
            $this->getResponse()->jsonResponse($user->findError(),1);
        }
    }

    /**
     * 登出
    **/ 
    public function logoutAction(){
        $session = $this->di('session');
        $session->delete('user');
        $this->redirectUrl(BASE_URL);
    }

    /**
     * 注册
     */
    public function regAction(){
        $data = [
            'user_login' => $this->getRequest()->post('user'),
            'user_pass'  => $this->getRequest()->post('pwd'),
            'user_email' => $this->getRequest()->post('email')
        ];

        // vaildate post data 
        $validator = $this->getValidator()->make($data, [
            'user_login' => ['required|min:4','用户名字数不能少于4'],
            'user_pass' => ['required|min:8','密码最小长度为8位'],
            'user_email'    => ['email','请填写正确的邮箱格式']
        ]);

        // if fail return errors to response
        if($validator->fails()) {
            $this->getResponse()->jsonResponse($validator->message(),2);
            exit;
        }

        $user = new UserService();
        if($user->validateUsername($data['user_login'])) {
            //nickname exists
            $this->getResponse()->jsonResponse('该用户名已被占用，请换用其他用户名', 1);
        } else {
            $ret = $user->addUser($data);

            if ($ret) {
                $this->redirectUrl(BASE_URL.'admin/login');
            } else {
                $this->getResponse()->jsonResponse('Db error',1);
            }
        }
    }

    /**
     * 更新用户信息
     */
    public function updateAction(){
        $data = $this->getRequest()->post();

        $user = new UserService();
        $ret  = $user->updateUserById($data, 1);

        if ($ret === 1) {
            $this->getResponse()->jsonResponse('success');
        }

    }

}
