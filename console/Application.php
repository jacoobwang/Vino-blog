<?php
namespace console;

class Application {

    /**
     * user input args
     * 
     * @var [array]
     */
    private $_params;

    /**
     * a commander instance
     * 
     * @var [object]
     */
    private $_commander;

    public static $_root;

    /**
     * init commander instance
     */
    public function __construct($path)
    {
        self::$_root = $path;
        $this->_commander = new \console\Commander();
    }

    /**
     * get params from user input
     * 
     * @return array
     */
    private function getParams() 
    {
        if ($this->_params === null) {
            if (isset($_SERVER['argv'])) {
                $this->_params = $_SERVER['argv'];
                array_shift($this->_params);
            } else {
                $this->_params = [];
            }
        }

        return $this->_params;
    }

    /**
     * resolve params to route
     * 
     * @return void
     */
    private function resolve()
    {
        $rawParams = $this->getParams();
        if (isset($rawParams[0])) {
            $route = $rawParams[0];
            array_shift($rawParams);
        } else {
            $route = '';
        }

        $params = [];
        foreach ($rawParams as $param) {
            if (preg_match('/^--(\w+)(?:=(.*))?$/', $param, $matches)) {
                $name = $matches[1];
                if ($name !== Application::OPTION_APPCONFIG) {
                    $params[$name] = isset($matches[2]) ? $matches[2] : true;
                }
            } elseif (preg_match('/^-(\w+)(?:=(.*))?$/', $param, $matches)) {
                $name = $matches[1];
                $params['_aliases'][$name] = isset($matches[2]) ? $matches[2] : true;
            } else {
                $params[] = $param;
            }
        }

        return [$route, $params];
    }

    /**
     * check the route and params is useful
     * 
     * @param [string] $cls_name
     * @return void
     */
    private function checkVaild($cls_name)
    {
        return class_exists($cls_name);
    }

    /**
     * run route 
     * 
     * @param [string] $route
     * @param [array] $_params
     * @return void
     */
    private function runAction($route, $params)
    {
        $cls_name = '\console\\'.$route;

        $_params = $params;
        $func = !empty($params) ?  'action'.ucfirst(array_shift($params)) : 'actionIndex';

        if ($this->checkVaild($cls_name)) {
            $inis = new $cls_name();
            if (method_exists($cls_name,$func)) {
                $inis->$func($params);
                exit;
            }
            $inis->actionIndex($_params);
        } else {
            $this->_commander->error("Unknown command:".$route);
            exit;
        }
    }

    /**
     * hook user request
     * 
     * @return void
     */
    public function handleRequest()
    {
        list ($route, $params) = $this->resolve();
        if (empty($route)) {
            $this->_commander-> getDefaultHelp();    
            exit;
        }
        $this->requestedRoute = $route;
        $result = $this->runAction($route, $params);
    }

}

?>