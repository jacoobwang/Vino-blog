<?php

namespace Mphp;

/**
 * Class RestAuth
 * @package Mphp
 */
class RestAuth {

    /**
     * 创建合法请求字符串
     * @param $parameters
     * @return string
     */
    public static function build_query_string($parameters) {
        // RFC3986
        // http://en.wikipedia.org/wiki/Percent-encoding#References
        $arr = array();
        foreach ($parameters as $k => $v) {
            $arr[] = sprintf('%s=%s', rawurlencode($k), rawurlencode($v));
        }

        return implode('&', $arr);
    }


    private $key_ = '';

    /**
     * @var int
     */
    private $timeout_ = 600;

    private $algorithm = 'md5';

    function __construct($key) {
        $this->key_ = $key;
    }

    /**
     * 设置timeout时间
     * @param int $timeout_
     */
    public function setTimeout($timeout_) {
        $this->timeout_ = $timeout_;
    }


    /**
     * 设置加密方式
     * @param string $algorithm
     * @return bool
     */
    public function setAlgorithm($algorithm) {
        $support_algorithm = array('sha256', 'sha1', 'md5');
        if (in_array($algorithm, $support_algorithm)) {
            $this->algorithm = $algorithm;
            return true;
        } else {
            return false;
        }
    }

    /**
     * 用HMAC 模式生成一个包含密钥的哈希码
     * @param $params
     * @return string
     */
    public function hmac($params) {
        $key = $this->key_;
        ksort($params);
        $str_params = self::build_query_string($params);
        $ret = hash_hmac($this->algorithm, $str_params, $key);
        return $ret;
    }

    /**
     * 创建请求串
     * @param $params
     * @param $appid
     * @return string
     */
    public function buildRequestParam($params, $appid) {
        $key = $this->key_;
        $params['expires'] = time() + $this->timeout_;
        $params['verify'] = $this->hmac($params, $key);
        $params['appid'] = $appid;
        return self::build_query_string($params);
    }


    /**
     * 验证请求
     * @param $params
     * @return int
     */
    public function verifyRequest($params) {
        $key = $this->key_;
        if (!isset($params['verify'])) {
            return 47510701;
        }
        if (!isset($params['expires'])) {
            return 47510702;
        }
        $verify = $params['verify'];
        $time = $params['expires'];
        unset($params['verify']);
        if (empty($params)) {
            return 47510703;
        }
        if ($verify !== $this->hmac($params, $key)) {
            return 47510704;
        }
        $now = time();
        if ($time < $now) {
            return 47510705;
        }
        return 0;
    }


}
