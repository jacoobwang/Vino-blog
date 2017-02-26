<?php
/**
 * User: jacoob
 * Date: 7/9/15
 * Time: 14:35 AM
 * Desc: 实现memcache封装
 */

namespace Mphp;

/**
 * Class MCache
 * @package Mphp
 */
class MCache implements ICache {

    private $_mc;
    private $_compressed = 0;

    public function __construct() {
        $mc = new \Memcached();
        $mc_config = App::getSingleton()->di('config')->get('memcache');
        $optionFlag = false;
        foreach ($mc_config as $value) {
            $mc->addServer($value['host'],$value['port']);
            if(isset($value['sasl']) && !$optionFlag) {
                $mc->setOption(\Memcached::OPT_COMPRESSION, false);//关闭压缩功能
                $mc->setOption(\Memcached::OPT_BINARY_PROTOCOL, true);//使用binary二进制协议
                $mc->setSaslAuthData($value['sasl']['username'],$value['sasl']['password']);
                $optionFlag = true;
            }
        }
        $this->_mc = $mc;
    }

    public function __destruct() {
        $this->_mc->quit();
    }

    /**
     * 设置缓存数据,不关心是否存在KEY
     * @param $key string
     * @param $value mixed
     * @param $expr int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     */
    public function set($key, $value, $expr=0) {
        $this->checkKey($key);
        $expr = $this->checkExpire($expr);
        return $this->_mc->set($key, $value, $this->_compressed, $expr);
    }

    /**
     * 设置缓存数据,存在KEY返回false
     * @param $key string
     * @param $value mixed
     * @param $expr int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     */
    public function add($key, $value, $expr=0) {
        $this->checkKey($key);
        $expr = $this->checkExpire($expr);
        return $this->_mc->add($key, $value, $this->_compressed, $expr);
    }

    /**
     * @param $key
     * @return mixed|false
     */
    public function get($key) {
        if(is_string($key) || is_array($key)) {
            return $this->_mc->get($key);
        } else {
            return false;
        }
    }

    /**
     * 删除一个KEY
     * @param $key
     * @return bool 是否成功。无指定KEY时也返回TRUE
     */
    public function delete($key) {
        $this->checkKey($key);
        return $this->_mc->delete($key);
    }

    /**
     * 自增
     * @param $key
     * @param int $step
     * @return bool
     */
    public function increment($key, $step=1) {
        $this->checkKey($key);
        $this->checkStep($step);
        return $this->_mc->increment($key, $step);
    }

    /**
     * 自减
     * @param $key
     * @param int $step
     * @return mixed
     */
    public function decrement($key, $step=1) {
        $this->checkKey($key);
        $this->checkStep($step);
        return $this->_mc->decrement($key, $step);
    }

    /**
     * 检查key
     * @param $key
     * @throws \Exception
     */
    private function checkKey($key) {
        if(!is_string($key)){
            throw ExceptionHelper::create('Memcache key must to be String type', 400101);
        }
    }

    /**
     * 检查是否过期
     * @param $expr
     * @return integer
     */
    private function checkExpire($expr) {
        if(is_int($expr) && $expr>=0 && $expr<=2592000) {
            return $expr;
        } else {
            return 0;
        }
    }

    /**
     * key > 0
     * @param $step
     * @throws \Exception
     */
    private function checkStep($step) {
        if(!is_int($step)||$step<=0) {
            throw ExceptionHelper::create('Memcache increment/decrement step must to be Integer type and large than zero', 400102);
        }
    }
}
