<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/8/15
 * Time: 11:04 AM
 */

namespace Mphp;

class DI implements \ArrayAccess {


    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->_store);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->register($offset, $value);
        $this->offsetUnset($offset);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset)
    {
        // 只销毁实例缓存
        unset($this->_caches[$offset]);
    }

    const SESSION = 'session';
    const COOKIE = 'cookie';



    /**
     * 已经实例化并加载的实例
     * @var array
     */
    private $_caches = array();

    /**
     * 注册的类型
     * @var array
     */
    private $_store = array();

    /**
     * 存储需要提前初始化的类
     * @var array
     */
    private $_load_list = array();


    /**
     * @param $key
     * @param $func callback 生成实例的回调函数
     * @param $is_load bool 是否提前初始化
     * @return $this
     */
    public function register($key, $func, $is_load = false) {
        $this->_store[$key] = $func;
        if ($is_load) {
            $this->_load_list[] = $key;
        }
        return $this;
    }

    public function get($key) {
        if (isset($this->_caches[$key])) {
            return $this->_caches[$key];
        }

        if (!isset($this->_store[$key])) {
            throw ExceptionHelper::create('No instance found: ' . $key, 848063);
        }

        $inst = $this->_store[$key]();
        $this->_caches[$key] = $inst;
        return $inst;
    }


    /**
     * 提前初始化指定的类
     * @throws \Exception
     */
    public function load() {
        foreach ($this->_load_list as $key) {
            $inst = $this->get($key);
            if ($inst instanceof IStart) {
                $inst->onRequestStart();
            } else {
                throw ExceptionHelper::create('Need to implement IStart interface', 224608);
            }
        }
    }
}
