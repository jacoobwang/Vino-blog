<?php
namespace Vino;

/**
 * Class Router
 * @package Vino
 */
class Router {
    /**
     * @var string 默认的路由KEY
     */
    private $_url_key = '_url';

    /**
     * @var array (pattern => 'controller/method')
     */
    private $_rules = array();

    /**
     * 网址前缀，为空或者以斜杠(/)结尾
     * @var string
     */
    private $_base_url = '';

    /**
     * 是否采用默认路由方式，如果为custom，则全部采用自定义路由
     * @var string
     */
    private $_style = 'normal';

    private $_middles = array();

    /**
     * @var RouteParse
     */
    private $_parser = null;


    public function __construct($base_url='',$style) 
    {
        if ($base_url != '') {
            $base_url = trim($base_url, '/');
            $base_url .= '/';
        }
        $this->_style   = $style;
        $this->_base_url = $base_url;
    }

    /**
     * @param $rule string
     * @param $cm string
     */
    public function addRoute($rule, $cm) 
    {
        $this->_rules[$rule] = $cm;
    }

    /**
     * @param $rules array array(rule => cm)
     */
    public function addRoutes($rules, $middleware='') 
    {
        foreach ($rules as $k => $v) {
            $this->_rules[$k]   = $v;
            $this->_middles[$k] = $middleware;
        }
    }

    /**
     * handle
     */
    public function handle() 
    {
        $req = Request::getSingleton();

        $url = $req->paramGet($this->_url_key);
        if ($url == null) {
            list($url,) = explode('?', $_SERVER['REQUEST_URI']);
        } else {
            $req->removeParam($this->_url_key);
        }

        $url = ltrim($url, '/');

        // 去除前缀
        if ($this->_base_url != '') {
            if (strpos($url, $this->_base_url) === false) {
                Response::errorNotFound('Path prefix error: ' . var_dump(array(
                        'url' => $url,
                        'base_url' => $this->_base_url,
                    ), true));
            }
            $url = substr($url, strlen($this->_base_url));

        }
        $is_got = false;
        //当前url命中的rule
        $which_rule = '';

        // 采用默认路由
        if ($this->_style == 'normal') {
            $parser = new RouteParse($url);
            if ($parser->isValid()) {
                $is_got = true;
            }else {
                //默认路由没有找到，匹配自定义规则
                foreach ($this->_rules as $rule => $cm) {
                    $parser = new RouteParse($cm, $rule);
                    if ($parser->isValid() && $parser->match($url)) {
                        $which_rule = $rule;
                        $is_got = true;
                        break;
                    }
                }
            }
        }

        // 不采用默认路由，直接读取所有自定义规则
        if ($this->_style == 'custom') {
            if(!$url){
                $parser = new RouteParse('');
                $is_got = true;
            }else {
                foreach ($this->_rules as $rule => $cm) {
                    $parser = new RouteParse($cm, $rule);
                    if ($parser->isValid() && $parser->match($url)) {
                        $which_rule = $rule;
                        $is_got = true;
                        break;
                    }
                }
            }
        }

        if (!$is_got) {
            Response::errorNotFound("Error Route match failed");
            //throw new Exception();
        }

        //如果路由存在，执行中间件
        if (isset($this->_middles[$which_rule]) && $this->_middles[$which_rule]) {
            $this->callMiddleware($this->_middles[$which_rule]);
        }

        $this->_parser = $parser;
        $req->setRouteParams($parser->getRouteValues());

        $controller_cls =  App::getSingleton()->getControllerNamespace() . $parser->getControllerName();
        $inst = new $controller_cls();
        $reflect_method = new \ReflectionMethod($inst, $parser->getActionName());
        $params = $reflect_method->getParameters();
        if (empty($params)) {
            call_user_func(array($inst, $parser->getActionName()));
        } else {
            $args = array();
            foreach ($params as $v) {
                $arg = $req->paramGet($v->getName());
                if (is_null($arg)) {
                    // 以Action函数参数指定，参数是必须的
                    Response::errorBadRequest('Parameter missed: '. $v->getName());
                }
                $args[] = $arg;
            }
            $reflect_method->invokeArgs($inst, $args);
        }
    }

    /**
     * @param $middles array
     */
    public function callMiddleware($middles)
    {
        foreach($middles as $value){
            $cls   = 'Ecc\\Topic\\Middleware\\'.$value;
            $wares = new $cls();
            $wares->handle();
        }
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->_base_url;
    }

    /**
     * @return string
     */
    public function getControllerName() 
    {
        return $this->_parser->getControllerName();
    }

    /**
     * @return string
     */
    public function getActionName() 
    {
        return $this->_parser->getActionName();
    }

    /**
     * @param $key string
     * @return null|string
     */
    public function getRouteValue($key) 
    {
        return $this->_parser->getRouteValue($key);
    }

    /**
     * @return RouteParse
     */
    public function getParser() 
    {
        return $this->_parser;
    }


    /**
     * Controller/action 转换为请求URL
     *
     * @param $cm string  'controller/action', NULL表示为当前路径，只替换参数
     * @param $params array('qs'=>'ss', ':page'=>2)
     * @throws \Exception
     * @return string
     */
    public function getActionUrl($cm, $params=null) 
    {
        if (empty($cm)) {
            $parser = $this->_parser;
            $url = $parser->getActionUrl($params);
            if ($url !== false) {
                return $this->toAbsoluteUrl($url);
            } else {
                throw ExceptionHelper::create('Missing router parameters', 836424);
            }
        } else {
            foreach ($this->_rules as $rule => $cm2) {
                if (strcasecmp($cm, $cm2) == 0) {
                    $parser = new RouteParse($cm, $rule);
                    if (!$parser->isValid()) {
                        throw ExceptionHelper::create('Invalid controller', 836423);
                    }
                    $url = $parser->getActionUrl($params);
                    if ($url !== false) {
                        return $this->toAbsoluteUrl($url);
                    }
                }
            }
        }

        $url = $cm;
        if (!empty($params)) {
            $url .= ('?'.http_build_query($params));
        }
        return $this->toAbsoluteUrl($url);
    }

    /**
     * @param $url
     * @return string
     */
    private function toAbsoluteUrl($url) 
    {
        if (empty($this->_base_url)) {
            $url = $this->_base_url . '/' . $url;
        }
        if ($url[0] !== '/') {
            $url = '/' . $url;
        }
        return $url;
    }




}
