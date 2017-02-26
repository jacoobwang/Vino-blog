<?php
namespace Mphp;

/**
 * Class Response
 * @package Mphp
 */
class Response {
    /**
     * Query 参数，指定JSONP回调函数名的参数KEY
     */
    const JSONP_CALLBACK_QUERY_KEY = 'callback';

    /**
     * Query 参数，指定输出类型的参数KEY
     */
    const RESPONSE_FORMAT_QUERY_KEY = 'of';

    /**
     * 404 NOT FOUND
     * @param string $msg
     */
    public static function errorNotFound($msg='') {
        header('HTTP/1.1 404 Not Found');
        echo 'Not found';
        if (defined('DEBUG')) {
            echo '<p>';
            echo $msg;
            echo '</p>';
        }
        exit;
    }

    /**
     * 错误信息
     * @param string $msg
     */
    public static function errorBadRequest($msg='') {
        header('HTTP/1.1 400 Bad Request');
        echo 'Bad Request';
        if (defined('DEBUG')) {
            echo '<p>';
            echo $msg;
            echo '</p>';
        }
        exit;
    }

    /**
     * header
     * @param string $type
     */
    public static function headerUTF8($type = 'text/html') {
        header("Content-type: {$type}; charset=utf-8");
    }


    /**
     * 对响应内容进行格式
     * @static
     * @param $content
     * @param int $code
     * @return array
     */
    private static function _response($content, $code = 0) {
        $ret = array(
            'errno' => $code,
        );
        if ($code === 0) {
            $ret['body'] = $content;
        } else {
            $ret['error'] = $content;
        }

        return $ret;
    }

    /**
     * 以json格式输出内容
     * @param mixed $content 返回内容
     * @param int $code 错误号，0为无错误
     * @return void
     */
    public static function jsonResponse($content, $code = 0) {
        $ret = self::_response($content, $code);
        self::headerUTF8('text/json');
        echo json_encode($ret);
    }

    /**
     * 以jsonp格式返回
     * @param $content
     * @param int $code
     */
    public static function jsonpResponse($content, $code = 0) {
        $ret = self::_response($content, $code);

        self::headerUTF8('application/x-javascript');

        $qs_key = self::JSONP_CALLBACK_QUERY_KEY;
        /** @var Request $req */
        $req = App::getSingleton()->di('request');
        $cb = Utils::getValue(
            $req->paramGet($qs_key),
            $req->paramRouter(":$qs_key", 'callback'));
        if (!empty($cb)) {
            $cb = strip_tags($cb);
        }

        echo $cb . '(' . json_encode($ret) . ')';
    }

    /**
     * 以xml格式返回
     * @param $content
     * @param int $code
     */
    public static function xmlResponse($content, $code = 0) {
        $ret = self::_response($content, $code);

        $inst_xml = new A2Xml();
        self::headerUTF8('text/xml');

        echo $inst_xml->toXml($ret);
    }

    /**
     * 从url中指定返回格式
     * @param $content
     * @param int $code
     */
    public static function response($content, $code = 0) {
        $defined_of = array('json', 'xml', 'jsonp');
        $qs_key = self::RESPONSE_FORMAT_QUERY_KEY;
        /** @var Request $req */
        $req = Request::getSingleton();
        $of = Utils::getValue(
            $req->paramGet($qs_key),
            $req->paramRouter(":$qs_key", 'json'));
        if (!in_array($of, $defined_of)) {
            $of = $defined_of[0];
        }

        $func = $of . 'Response';
        $cls = __CLASS__;
        call_user_func(array($cls, $func), $content, $code);
    }
}
