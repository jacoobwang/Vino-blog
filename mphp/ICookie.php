<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/9/15
 * Time: 11:56 AM
 */

namespace Mphp;
/**
 * Interface ICookie
 * @package Mphp
 */
interface ICookie {
    const COOKIEPATH = '/';
    const COOKIESECURE = false;
    const COOKIEHTTPONLY = false;

    /**
     * 设置单个Cookie
     * @param $key string
     * @param $value string
     * @param $expire=0 int 以秒为单位的整数（从当前算起的时间差）来说明此数据的过期时间
     * @param [$ops array ['path'=>string, 'domain'=>string, secure=>bool, httponly=>bool], 可设置一项或多项]
     * @return bool 设置失败返回FALSE
     */
    public function set($key, $value, $expire=0);

    /**
     * 与set()方法功能基本相同
     * 不同点: $value不会被urlencoded自动转换
     * @param $key string
     * @param $value string
     * @param int $expire
     * @param [$ops array ['path'=>string, 'domain'=>string, secure=>bool, httponly=>bool], 可设置一项或多项]
     * @return bool 设置失败返回FALSE
     */
    public function setRaw($key, $value, $expire=0);

    /**
     * 批量设置Cookie
     * @param $arr array
     * @return void
     */
    public function setAll($arr);

    /**
     * 批量设置Cookie(Raw)
     * @param $arr array
     * @return void
     */
    public function setAllRaw($arr);

    /**
     * 获取Cookie
     * @param $key string
     * @return string|array|bool
     */
    public function get($key);

    /**
     * 返回所有Cookie值
     * @return array
     */
    public function getAll();

    /**
     * 删除Cookie(设置失效)
     * @param $key string
     * @return void
     */
    public function delete($key);

    /**
     * 此KEY是否存在
     * @param $key string
     * @return bool
     */
    public function exist($key);

    /**
     * 延长Cookie有效期
     * @param $key string
     * @param $expire int 以当前时间为基准,延长时间的秒数
     * @return bool
     */
    public function updateTime($key, $expire);

}
