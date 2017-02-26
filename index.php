<?php
/**
 * Created by PhpStorm.
 * User: Jacoob
 * Date: 7/10/16
 * Time: 10:50 AM
 */
namespace Ecc\Topic;

define('SITE_ROOT',  __DIR__);
define('DEBUG',     true);
define('TIMESTAMP', time());
require __DIR__ . '/vendor/autoload.php';

ini_set('date.timezone','Asia/Shanghai');

$app = \Mphp\App::getSingleton();
$app->setControllerNamespace('\\Ecc\\Topic\\Controller\\');
$di = $app->di();

$di->register('config', function () {
    return new \Mphp\Config(SITE_ROOT.'/configs');
});

if (!defined('IN_CLI')) {
    // session
    $di->register('session', function() {
        return new \Mphp\Session();
    });

    // twig
    $di->register('twig', function () use($di) {
        $cfg = $di['config'];
        $loader =  new \Twig_Loader_Filesystem();
        $loader->addPath(SITE_ROOT . '/' . $cfg->get('twig/tpl_dir').'/frontend', 'front');
        $loader->addPath(SITE_ROOT . '/' . $cfg->get('twig/tpl_dir').'/backend', 'admin');
        $twig   =  new \Twig_Environment($loader, array(
            'cache' => $cfg->get('twig/compile_dir'), //缓存目录
            'auto_reload' => true     //代码改变，重新编译
        ));
        return $twig;
    });

    // monolog
    $di->register('log', function () use($di) {
        $log = new \Mphp\MLogger(SITE_ROOT.'/logs/app.log');

        // header info if no need,you can remove
        $log->setWebProcessor();

        //log will be output chrome console,need chrome extension
        //$log->setAllowChromeLog();

        return $log;
    });
}


// routers
$di->register('router', function () use($di) {
    $base_url     = $di['config']->get('core/base_url');
    $route_style  = $di['config']->get('core/route_style');

    define('BASE_URL', $base_url);

    $router = new \Mphp\Router($base_url,$route_style);

    $router->addRoutes(
        [
            'login'                => 'UserController/login',
            'reg'                  => 'UserController/register',
            'cat/{slug}'           => 'IndexController/category',
            'tag/{slug}'           => 'IndexController/tag',
            'post/{id}'            => 'IndexController/post',
            'admin/login'          => 'BackendViewController/login',
            'api/user/reg'         => 'UserController/reg',
            'api/page/{cat}/{num}' => 'IndexController/pageCate',
            'api/page/{num}'       => 'IndexController/page',
        ]
    );

    $router->addRoutes([
        'admin/home'           => 'BackendViewController/index',
        'admin/table'          => 'BackendViewController/table',
        'admin/post'           => 'BackendViewController/post',
        'admin/category'       => 'BackendViewController/category',
        'admin/category/edit/{id}'=> 'BackendViewController/categoryEdit',
        'admin/new-post'       => 'BackendViewController/markdown',
        'admin/edit/{id}'      => 'BackendViewController/edit',
        'admin/setting'        => 'BackendViewController/setting',
        'admin/user'           => 'UserController/user',
        'admin/logout'         => 'UserController/logout',
        'admin/upload'         => 'UploadController/upload',
        'admin/page/{num}'     => 'BackendController/page',
        'admin/delete/{id}'    => 'BackendController/deletePost',
        'api/user/update'      => 'UserController/update',
        'api/category/add'     => 'BackendController/addCategory',
        'api/category/del/{id}'=> 'BackendController/delCategory',
        'api/category/update/{id}'=> 'BackendController/updateCategory',
        'api/post/add'         => 'BackendController/addPost',
        'api/post/update'      => 'BackendController/updatePost',
        'api/setting/update'   => 'BackendController/updateSetting',
    ],
    [
        'middleware'  => 'AuthMiddleware',
    ]);

    return $router;
});

// db 
$di->register('db', function () {
    return \Mphp\Db::getConnection();
});

$app->run($di);
