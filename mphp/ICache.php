<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/9/15
 * Time: 10:39 AM
 */

namespace Mphp;

/**
 * Interface ICache
 * @package Mphp
 */
interface ICache {
    /**
     * 设置缓存数据,不关心是否存在KEY
     * @param $key string
     * @param $value mixed
     * @param $expr int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     */
    public function set($key, $value, $expr=0);

    /**
     * 设置缓存数据,存在KEY返回false
     * @param $key string
     * @param $value mixed
     * @param $expr int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     */
    public function add($key, $value, $expr=0);

    /**
     * @param $key
     * @return mixed|false
     */
    public function get($key);

    /**
     * 删除一个KEY
     * @param $key
     * @return bool 是否成功。无指定KEY时也返回TRUE
     */
    public function delete($key);

    /**
     * 自增
     * @param $key
     * @param int $step
     * @return bool
     */
    public function increment($key, $step=1);

    /**
     * 自减
     * @param $key
     * @param int $step
     * @return mixed
     */
    public function decrement($key, $step=1);
}
