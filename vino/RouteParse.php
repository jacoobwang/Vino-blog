<?php
namespace Vino;

/**
 * Class RouteParse
 * @package Vino
 */
class RouteParse {
    /**
     * @var string
     */
    private $_controller_name;

    /**
     * @var string
     */
    private $_action_name;

    /**
     * @var string
     */
    private $_rule;


    /**
     * 命名和对应的正则
     * @var array  array('catid' => '\d+')
     */
    private $_rule_holders = array();

    /**
     * 只带命名占位符的样式，不含正则
     * @var string `doc/{catid}/{docid}`
     */
    private $_rule_format = '';

    /**
     * '`doc/.+?/\d+`'
     * @var string 路由规则生成的正则表达式
     */
    private $_rule_pattern = '';

    /**
     * 从请求地址中获取值
     * @var array  array('catid'=>1, 'docid' => 123)
     */
    private $_route_values = array();

    /**
     * 指示此类是否有效，可能会由于控制器与方法未找到导致内部错误
     * @var bool
     */
    private $_is_valid = true;


    public function __construct($cm, $rule = null) 
    {
        $this->initCM($cm);
        if ($rule != null) {
            $this->initRule($rule);
        }
    }

    /**
     * initRule
     * @param $rule
     */
    private function initRule($rule) 
    {
        $this->_rule = $rule;
        $this->_rule_format = preg_replace_callback(
            '`{(.+?)}`',
            function ($matches) {
                $arr = explode(':', $matches[1], 2);
                $this->_rule_holders[$arr[0]] = count($arr) > 1 ? $arr[1] : '.+?';
                return "{{$arr[0]}}";
            },
            $rule
        );

        $replaces = array();
        foreach ($this->_rule_holders as $k => $v) {
            $replaces["{{$k}}"] = sprintf("(%s)", str_replace('(', '(?i:', $v));
        }
        $this->_rule_pattern = str_replace(
            array_keys($replaces),
            array_values($replaces),
            $this->_rule_format
        );
    }

    /**
     * initCM
     * @param $cm
     */
    private function initCM($cm) 
    {
        $this->_rule_format = $cm;
        $action_name = 'Index';
        if (empty($cm)) {
            $controller_name = 'Index';
        } else {
            $arr = explode('/', $cm);
            switch (count($arr)) {
                case 2:
                    if (!empty($arr[1])) {
                        $action_name = $arr[1];
                    }
                case 1:
                    $controller_name = $arr[0];
                    break;
                default:
                    $this->_is_valid = false;
                    return;
            }
        }

        $this->_controller_name = ucfirst($controller_name);
        if(substr($this->_controller_name,-10) != 'Controller') {
            $this->_controller_name .= 'Controller';
        }
        $this->_action_name = lcfirst($action_name).'Action';

        $ctrl_name =  App::getSingleton()->getControllerNamespace() . $this->_controller_name;

        $this->_is_valid = class_exists($ctrl_name) &&
            method_exists($ctrl_name, $this->_action_name);
    }

    /**
     * match
     * @param $url
     * @return bool
     */
    public function match($url) 
    {
        $is_match = preg_match_all(
            sprintf('`^%s$`i', $this->_rule_pattern),
            $url,
            $matches
        );

        if (!$is_match) {
            return false;
        }

        $i = 1;
        foreach ($this->_rule_holders as $k => $v) {
            $this->_route_values[":$k"] = $matches[$i][0];
            ++$i;
        }

        return true;

    }

    /**
     * getControllerName
     * @return string
     */
    public function getControllerName() 
    {
        return $this->_controller_name;
    }

    /**
     * getActionName
     * @return string
     */
    public function getActionName() 
    {
        return $this->_action_name;
    }

    /**
     * getRouteValues
     * @return array
     */
    public function getRouteValues() 
    {
        return $this->_route_values;
    }


    /**
     * isValid
     * @return boolean
     */
    public function isValid() 
    {
        return $this->_is_valid;
    }


    /**
     * getActionUrl
     * 根据参数返回URL，如果参数无法匹配路由规则，则返回FALSE
     * @param $params default=null
     * @return bool|string
     */
    public function getActionUrl($params=null) 
    {
        if (empty($params) && !empty($this->_rule_holders)) {
            return false;
        }

        if (!empty($this->_rule_holders)) {
            $replaces = array();
            foreach(array_keys($this->_rule_holders) as $k) {
                $k2 = ":$k";
                if (!isset($params[$k2])) {
                    return false;
                } else {
                    $replaces["{{$k}}"] = $params[$k2];
                    unset($params[$k2]);
                }
            }
            $url = str_replace(array_keys($replaces), array_values($replaces), $this->_rule_format);
        } else {
            $url = $this->_rule_format;
        }
        if (!empty($params)) {
            $url .= ('?'.http_build_query($params));
        }
        return $url;
    }


}
