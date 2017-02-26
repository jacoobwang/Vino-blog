<?php
namespace Mphp;

/**
 * Class Utils
 * @package Mphp
 */
class Utils {

    /**
     * 将参数转换为整数
     * @static
     * @param $val string|array
     * @return int
     */
    public static function intval($val) {
        if (is_array($val)) {
            foreach ($val as &$v) {
                $v = self::intval($v);
            }
            return $val;
        }
        if (is_numeric($val)) {
            return intval($val);
        } else {
            return $val;
        }
    }

    /**
     * 获取随机串
     * @param int $len
     * @return string
     */
    public static function randStr($len = 6) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        mt_srand((double)microtime() * 1000000 * getmypid()); // seed the random number generater (must be done)
        $password = '';
        while (strlen($password) < $len) {
            $password .= substr($chars, (mt_rand() % strlen($chars)), 1);
        }
        return $password;
    }


    /**
     * 返回是否为空，不包含 '0'
     * @param $value
     * @return bool
     */
    public static function isEmpty($value) {
        if ($value === '0') {
            return false;
        }
        return empty($value);
    }

    /**
     * 获取参数列表中第一个不为空的参数
     * @return mixed
     */
    public static function getValue() {
        $values = func_get_args();
        foreach ($values as $v) {
            if (!self::isEmpty($v)) {
                return $v;
            }
        }
        return end($values);
    }

    /**
     * 返回数组中指定KEY的值
     * @param $arr
     * @param int|string|array $key 如果是数组，依次返回每个元素为KEY的值
     * @param null $default
     * @return null
     */
    public static function arrayGet($arr, $key, $default = null) {
        if (is_array($key)) {
            $key2 = array_shift($key);
            if (isset($arr[$key2])) {
                if (empty($key)) {
                    return $arr[$key2];
                } else {
                    return self::arrayGet($arr[$key2], $key, $default);
                }
            } else {
                return $default;
            }
        }
        if (isset($arr[$key])) {
            return $arr[$key];
        } else {
            return $default;
        }
    }

    /**
     * 返回指定key的 values
     * @param array $keys 指定的keys
     * @param array $values 待选择的数组
     * @param bool $strict 是否严格，true时有一个元素不存在时就返回null，否则用null填充
     * @return array
     */
    public static function arraySelect($keys, $values, $strict = false) {
        $new = array();
        foreach ($keys as $k => $v) {
            $key = is_numeric($k) ? $v : $k;
            if (array_key_exists($v, $values)) {
                $new[$key] = $values[$v];
            } else {
                if ($strict) {
                    return null;
                }
                $new[$key] = null;
            }
        }
        return $new;
    }

    /**
     * md5+盐
     * @param $pwd
     * @param string $salt
     * @return string
     */
    public static function md5Crypt($pwd, $salt = '') {
        if (empty($salt)) $salt = self::randStr(8);
        $salt2 = '$1$' . $salt . '$';
        $ret = crypt($pwd, $salt2);
        return $ret;
    }

    /**
     * 获取路径
     * @return string
     */
    public static function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0 ||
            !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
        return
            ($https ? 'https://' : 'http://').
            (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
                ($https && $_SERVER['SERVER_PORT'] === 443 ||
                $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }

}
