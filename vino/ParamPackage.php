<?php
namespace Vino;

/**
 * Class ParamPackage
 * @package Vino
 */
class ParamPackage {
    private $key = 'Vino001';

    /**
     * 扩展的BASE64编码。便于URL传递
     * @param $str
     * @return mixed|string
     */
    public static function base64Encode($str) 
    {
        $str = base64_encode($str);
        $str = str_replace(array('/', '+', '='), array('.', '-', '_'), $str);
        return $str;
    }

    /**
     * 扩展的BASE64解码
     * @param $str
     * @return mixed|string
     */
    public static function base64Decode($str) 
    {
        $str = str_replace(array('.', '-', '_'), array('/', '+', '='), $str);
        $str = base64_decode($str);
        return $str;
    }


    /**
     * 打包参数
     * @param string|int $data 数据
     * @return string
     */
    public function pack($data) 
    {
        $data = self::base64Encode($data);
        $hash = md5($data.$this->key);
        return substr($hash, 0, 6) . $data;
    }


    /**
     * 解包。如果当初压缩的是数组，需要自己去反序列化
     * @param $data
     * @return bool|string 解包后的数据内容
     */
    public function unpack($data) 
    {
        if (strlen($data) < 7) {
            return false;
        }
        $verify = substr($data, 0, 6);
        $id2 = substr($data, 6);
        $hash = md5($id2 . $this->key);
        if (substr($hash, 0, 6) !== $verify) {
            return false;
        } else {
            return self::base64Decode($id2);
        }
    }
}
