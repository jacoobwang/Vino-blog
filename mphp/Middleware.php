<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2016/12/20
 * Time: 16:11
 */

namespace Mphp;

/**
 * Class Middleware
 * @package Mphp
 */
class Middleware{

    public function di()
    {
        return call_user_func_array(array(App::getSingleton(), 'di'), func_get_args());
    }

    /**
     * @param $url
     * redirect
     */
    public function redirect($url)
    {
        header('Location: '. $url);
        exit;
    }

}