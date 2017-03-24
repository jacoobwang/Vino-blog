<?php
namespace Vino;

/**
 * Class Session
 * @package Vino
 */
class Session implements ISession {

    function __construct() 
    {
        $argNum = func_num_args();
        switch ($argNum) {
            case 0:
                session_start();
                break;
            case 1:
                $sid = func_get_arg(0);
                if(!empty($sid)) {
                    session_id($sid);
                }
                session_start();
                break;
            default:
                session_start();
                break;
        }
    }

    /**
     * @param $key string
     * @param $value string
     * @return bool 设置失败返回FALSE
     */
    public function set($key, $value) 
    {
        $this->checkKey($key);
        $_SESSION[$key] = $value;
        return true;
    }

    /**
     * @param $key string
     * @param $value string
     * @return bool 存在KEY返回FALSE
     */
    public function add($key, $value) 
    {
        $this->checkKey($key);
        if(!$this->exist($key)) {
            $_SESSION[$key] = $value;
            return true;
        } else {
            return false;
        }
    }

    /**
     *
     * @param $key string
     * @return string|false 无值时返回false
     */
    public function get($key) 
    {
        $this->checkKey($key);
        if(!$this->exist($key)) {
            return false;
        } else {
            return $_SESSION[$key];
        }
    }

    /**
     * @param $key string
     * @return bool 不存在KEY，返回TRUE
     */
    public function delete($key) 
    {
        $this->checkKey($key);
        if($this->exist($key)) {
            unset($_SESSION[$key]);
        }
        return true;
    }

    /**
     * 此KEY是否存在
     * @param $key string
     * @return bool
     */
    public function exist($key) 
    {
        $this->checkKey($key);
        return isset($_SESSION[$key]) ? true : false;
    }

    /**
     * @return mixed
     */
    public function all() 
    {
        return $_SESSION;
    }

    /**
     * @param $key
     * @throws \Exception
     */
    private function checkKey($key) 
    {
        if(!is_string($key)) {
            throw new Exception('Session key must to be String type');
        }
    }

    /**
     * 销毁Session
     * @return void
     */
    public function destroy() 
    {
        session_destroy();
    }

    /**
     * 获取/设置 当前会话 ID
     * @param [$id string]
     * @return string
     */
    public function sessionId() 
    {
        $argNum = func_num_args();
        switch ($argNum) {
            case 0:
                return session_id();
                break;
            case 1:
                $arg = func_get_arg(0);
                return session_id($arg);
                break;
            default:
                return '';
                break;
        }
    }
}
