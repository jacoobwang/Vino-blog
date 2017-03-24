<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/8/15
 * Time: 10:57 AM
 */

namespace Vino;

/**
 * Class App
 * @package Vino
 */
class App {

    private static $_singleton = null;

    public static function getSingleton()
    {
        if (self::$_singleton == null) {
            self::$_singleton = new self();
        }
        return self::$_singleton;
    }


    /**
     * @var DI
     */
    private $_di;

    /**
     * @var string controller namespace
     */
    private $_controller_namespace = '\\App\\Controller\\';

    private $_datetime;

    private function __construct()
    {
        $this->_initDi();
    }

    /**
     * init
     */
    private function _initDi()
    {
        $di = new DI();
        $this->_di = $di;
    }

    /**
     * 获取具体管理容器或者某一具体实现
     * @param $key string 实例别名（可选）
     * @return DI
     */
    public function di()
    {
        if (func_num_args() == 1) {
            return $this->_di->get(func_get_arg(0));
        } else {
            return $this->_di;
        }
    }

    /**
     * @param $di 容器
     */
    public function run(&$di)
    {
        $di['router']->handle();
    }

    /**
     * @return string
     */
    public function getControllerNamespace()
    {
        return $this->_controller_namespace;
    }

    /**
     * @param string $controller_namespace
     */
    public function setControllerNamespace($controller_namespace)
    {
        $this->_controller_namespace = $controller_namespace;
    }


    /**
     * 返回请求时间
     * @return string
     */
    public function getDatetime()
    {
        if ($this->_datetime == null) {
            $this->_datetime = date('Y-m-d H:i:s', TIMESTAMP);
        }
        return $this->_datetime;
    }

}
