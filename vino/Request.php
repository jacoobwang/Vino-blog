<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/8/15
 * Time: 4:25 PM
 */

namespace Vino;

/**
 * Class Request
 * @package Vino
 */
class Request {
    /**
     * @var 实例
     */
    private static $_singleton;

    /**
     * @var array 路由参数
     */
    private $_route_params = array();

    /**
     * @return Request
     */
    public static function getSingleton() 
    {
        if (self::$_singleton == null) {
            self::$_singleton = new self();
        }
        return self::$_singleton;
    }

    /**
     * 返回数组中的key
     * @param array $arr
     * @param array|string $key
     * @param null $default
     * @return string
     */
    private function _getValue($arr, $key, $default = null) 
    {
        if (is_array($key)) {
            $ret = [];
            foreach ($key as $v) {
                $ret[$v] = $this->_getValue($arr, $v, $default);
            }
            return $ret;
        }
        if (isset($arr[$key])) {
            return $arr[$key];
        } else {
            return $default;
        }
    }

    /**
     * 设置route参数
     * @param array $route_params
     */
    public function setRouteParams($route_params) 
    {
        $this->_route_params = $route_params;
    }

    /**
     * 获取GET参数值，如果为空继续检索路由参数
     * @param $key
     * @param null $default
     * @return null
     */
    public function paramGet($key, $default = null) 
    {
        $ret = $this->_getValue($_GET, $key, null);
        if (is_null($ret)) {
            $ret = $this->paramRouter($key, $default);
        }
        return $ret;
    }

    /**
     * 获取路由参数
     * @param $key
     * @param null $default
     * @return null
     */
    public function paramRouter($key, $default = null) 
    {
        return $this->_getValue($this->_route_params, ":$key", $default);
    }

    /**
     * 获取http request method
     * @return mixed
     */
    public function getMethod() 
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    /**
     * GET请求中是否存在key
     * @param $key
     * @return bool
     */
    public function hasGetParam($key) 
    {
        return isset($_GET[$key]);
    }

    /**
     * POST是否存在key
     * @param $key
     * @return bool
     */
    public function hasPostParam($key) 
    {
        return isset($_POST[$key]);
    }

    /**
     * 获取客户端ip
     * @return mixed
     */
    public function getClientIp() 
    {
        return isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : $_SERVER['REMOTE_ADDR'];
    }

    /**
     * 获取get参数或路由参数
     * @param $key
     * @param null $default
     * @return null
     */
    public function get($key, $default = null) 
    {
        return $this->paramGet($key, $default);
    }

    /**
     * 获取post参数
     * @param $key
     * @param null $default
     * @return array|null
     */
    public function post($key = null, $default = null) 
    {
        if (is_null($key)) return $_POST;
        return $this->_getValue($_POST, $key, $default);
    }
}
