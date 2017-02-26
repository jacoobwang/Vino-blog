<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 2015/7/13
 * Time: 10:13
 */

namespace Mphp;

/**
 * Class Cookie
 * @package Mphp
 */
class Cookie implements ICookie {

    private $_path = ICookie::COOKIEPATH;
    private $_domain = '';
    private $_secure = ICookie::COOKIESECURE;
    private $_httponly = ICookie::COOKIEHTTPONLY;

    public function __construct() {
        $this->_domain = $_SERVER['SERVER_NAME'];
    }

    /**
     * 解析cookie信息
     * @param $ops
     */
    private function parseOps($ops) {
        if(isset($ops['path'])) {
            $this->_path = $ops['path'];
        }
        if(isset($ops['domain'])) {
            $this->_domain = $ops['domain'];
        }
        if(isset($ops['secure'])) {
            $this->_secure = $ops['secure'];
        }
        if(isset($ops['httponly'])) {
            $this->_httponly = $ops['httponly'];
        }
    }

    /**
     * 设置单个Cookie
     * @param $key string
     * @param $value string
     * @param $expire =0 int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     * @param [$ops array ['path'=>string, 'domain'=>string, secure=>bool, httponly=>bool], 可设置一项或多项]
     * @return bool 设置失败返回FALSE
     */
    public function set($key, $value, $expire = 0)
    {
        $argNum = func_num_args();
        if($argNum==4) {
            $ops = func_get_arg(3);
            $this->parseOps($ops);
        }
        return setcookie($key, $value, $expire, $this->_path, $this->_domain, $this->_secure, $this->_httponly);
    }

    /**
     * 与set()方法功能基本相同
     * 不同点: $value不会被urlencoded自动转换
     * @param $key string
     * @param $value string
     * @param int $expire
     * @param [$ops array ['path'=>string, 'domain'=>string, secure=>bool, httponly=>bool], 可设置一项或多项]
     * @return bool 设置失败返回FALSE
     */
    public function setRaw($key, $value, $expire = 0)
    {
        $argNum = func_num_args();
        if($argNum==4) {
            $ops = func_get_arg(3);
            $this->parseOps($ops);
        }
        return setrawcookie($key, $value, $expire, $this->_path, $this->_domain, $this->_secure, $this->_httponly);
    }

    /**
     * 批量设置Cookie (expire=0)
     * @param $arr array
     * @return void
     */
    public function setAll($arr)
    {
        foreach ($arr as $key=>$value) {
            setcookie($key, $value, 0, $this->_path, $this->_domain, $this->_secure, $this->_httponly);
        }
    }

    /**
     * 批量设置Cookie(Raw)
     * @param $arr array
     * @return void
     */
    public function setAllRaw($arr)
    {
        foreach ($arr as $key=>$value) {
            setrawcookie($key, $value, 0, $this->_path, $this->_domain, $this->_secure, $this->_httponly);
        }
    }

    /**
     * 获取Cookie
     * @param $key string
     * @return string|array|bool
     */
    public function get($key)
    {
        if($this->exist($key)) {
            return $_COOKIE[$key];
        } else {
            return false;
        }
    }

    /**
     * 返回所有Cookie值
     * @return array
     */
    public function getAll()
    {
        return $_COOKIE;
    }

    /**
     * 删除Cookie(设置失效)
     * @param $key string
     * @return void
     */
    public function delete($key)
    {
        setcookie($key, NULL);
    }

    /**
     * 此KEY是否存在
     * @param $key string
     * @return bool
     */
    public function exist($key)
    {
        return isset($_COOKIE[$key]);
    }

    /**
     * 延长Cookie有效期
     * @param $key string
     * @param $expire int 以当前时间为基准,延长时间的秒数
     * @return bool
     */
    public function updateTime($key, $expire)
    {
        if($this->exist($key)) {
            $value = $_COOKIE[$key];
            return setcookie($key, $value, time()+$expire);
        } else {
            return false;
        }
    }

}
