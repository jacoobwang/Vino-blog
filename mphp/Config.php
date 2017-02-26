<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 2015/7/13
 * Time: 10:13
 */
namespace Mphp;

/**
 * Class Config
 * @package Mphp
 */
class Config implements IConfig
{
    private $config_info = array();
    private $config_dir = '';


    public function __construct($dir)
    {
        if (!file_exists($dir)) {
            throw ExceptionHelper::create('Config directory not found: '.$dir, 123104);
        }
        $this->config_dir = $dir;
    }

    /**
     * 获取配置信息
     * @param $key
     * @param null $default
     * @return null
     * @throws \Exception
     */
    public function get($key, $default=null)
    {
        if (!is_array($key)) {
            $key = explode('/', $key);
        }

        $i = 0;
        $cfg = null;
        foreach($key as $k) {
            if (0 === $i) {
                if (!array_key_exists($k, $this->config_info)) {
                    $f = $this->config_dir . '/' . "$k.php";
                    if (!file_exists($f)) {
                        if ($default !== null) {
                            return $default;
                        }
                        throw ExceptionHelper::create('Config file is missed', 316882);
                    }
                    $this->config_info[$k] = include($f);
                }
                $cfg = $this->config_info[$k];
            } else {
                if (!array_key_exists($k, $cfg)) {
                    if ($default !== null) {
                        return $default;
                    }
                    throw ExceptionHelper::create('Config file is missed', 368722);
                }
                $cfg = $cfg[$k];
            }
            ++$i;
        }
        return $cfg;
    }


}
