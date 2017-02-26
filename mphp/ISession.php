<?php
namespace Mphp;

/**
 * Interface ISession
 * @package Mphp
 */
interface ISession {
    /**
     * @param $key string
     * @param $value string
     * @return bool 设置失败返回FALSE
     */
    public function set($key, $value);

    /**
     * @param $key string
     * @param $value string
     * @return bool 存在KEY返回FALSE
     */
    public function add($key, $value);

    /**
     *
     * @param $key string
     * @return string|false 无值时返回false
     */
    public function get($key);

    /**
     * @param $key string
     * @return bool 不存在KEY，返回TRUE
     */
    public function delete($key);

    /**
     * 此KEY是否存在
     * @param $key string
     * @return bool
     */
    public function exist($key);

    /**
     * 销毁Session
     * @return void
     */
    public function destroy();

    /**
     * 获取/设置 当前会话 ID
     * @param [$id string]
     * @return string
     */
    public function sessionId();
}
