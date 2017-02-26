<?php
namespace Mphp;

/**
 * Class MCurl
 * @package Mphp
 */
class MCurl {
    private $http_code_ = 0;
    private $errno_ = 0;
    private $error_ = '';
    private $response_ = '';
    private $headers_ = array();
    private $options_ = array();
    private $info_ = array();
    private $handle_ = null;

    function __construct($url) {
        $this->handle_ = curl_init($url);
    }

    public function setTimeout($t) {
        $this->option('timeout', $t);
    }

    /**
     * @return int
     */
    public function getErrno() {
        return $this->errno_;
    }

    /**
     * @return string
     */
    public function getError() {
        return $this->error_;
    }

    /**
     * @return array
     */
    public function getInfo() {
        return $this->info_;
    }

    /**
     * @return int
     */
    public function getHttpCode() {
        return $this->http_code_;
    }

    /**
     * @return bool|mixed|string
     */
    public function httpGet() {
        return $this->send();
    }

    /**
     * @param array $params
     * @param array $options
     * @return bool|mixed|string
     */
    public function httpPost($params = array(), $options = array()) {
        // If its an array (instead of a query string) then format it correctly
        if (is_array($params)) {
            $params = http_build_query($params);
        }
        // Add in the specific options provided
        $this->options($options);
        $this->option(CURLOPT_POST, TRUE);
        $this->option(CURLOPT_POSTFIELDS, $params);
        return $this->send();
    }

    /**
     * @param $header
     * @param null $content
     */
    public function httpHeader($header, $content = NULL) {
        $this->headers_[] = $content ? $header . ': ' . $content : $header;
    }

    /**
     * @return bool|mixed|string
     */
    private function send() {
        // Set two default options_, and merge any extra ones in
        if (!isset($this->options_[CURLOPT_TIMEOUT])) {
            $this->options_[CURLOPT_TIMEOUT] = 30;
        }
        if (!isset($this->options_[CURLOPT_RETURNTRANSFER])) {
            $this->options_[CURLOPT_RETURNTRANSFER] = TRUE;
        }
        if (!isset($this->options_[CURLOPT_FAILONERROR])) {
            $this->options_[CURLOPT_FAILONERROR] = TRUE;
        }

        if (!empty($this->headers_)) {
            $this->option(CURLOPT_HTTPHEADER, $this->headers_);
        }

        $this->options();

        // Execute the request & and hide all output
        $this->response_ = curl_exec($this->handle_);
        $this->info_ = curl_getinfo($this->handle_);
        $this->http_code_ = $this->info_['http_code'];

        // Request failed
        if ($this->response_ === FALSE) {
            $this->errno_ = curl_errno($this->handle_);
            $this->error_ = curl_error($this->handle_);
            curl_close($this->handle_);
            return FALSE;
        } // Request successful
        else {
            curl_close($this->handle_);
            return $this->response_;
        }
    }

    /**
     * @param bool $verify_peer
     * @param int $verify_host
     * @param null $path_to_cert
     * @return $this
     */
    public function ssl($verify_peer = TRUE, $verify_host = 2, $path_to_cert = NULL) {
        if ($verify_peer) {
            $this->option(CURLOPT_SSL_VERIFYPEER, TRUE);
            $this->option(CURLOPT_SSL_VERIFYHOST, $verify_host);
            $this->option(CURLOPT_CAINFO, $path_to_cert);
        } else {
            $this->option(CURLOPT_SSL_VERIFYPEER, FALSE);
        }
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function options($options = array()) {
        // Merge options in with the rest - done as array_merge() does not overwrite numeric keys
        foreach ($options as $option_code => $option_value) {
            $this->option($option_code, $option_value);
        }
        // Set all options provided
        curl_setopt_array($this->handle_, $this->options_);
        return $this;
    }

    /**
     * @param $code
     * @param $value
     * @return $this
     */
    public function option($code, $value) {
        if (is_string($code) && !is_numeric($code)) {
            $code = constant('CURLOPT_' . strtoupper($code));
        }
        $this->options_[$code] = $value;
        return $this;
    }

}
