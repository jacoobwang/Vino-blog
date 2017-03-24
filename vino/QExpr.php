<?php

namespace Vino;

/**
 * Class QExpr
 * @package Vino
 */
class QExpr {
    private static $index = 0;
    public $expression;
    public $params = array();

    /**
     * count => QExpress('count+?', -2)  <==> count = count - :fld0
     * @param $expression
     * @throws \Exception
     */
    public function __construct($expression) 
    {
        $arr = explode('?', $expression);
        $c = count($arr);
        if ($c === 1) {
            $this->expression = $expression;
        } else {
            if ($c !== func_num_args()) {
                throw new Exception('Invalid arguments');
            }

            $lines = array($arr[0]);

            for ($i = 1; $i < $c; ++$i) {
                $k = ':epr' . ++self::$index;
                $this->params[$k] = func_get_arg($i);
                $lines[] = $k;
                $lines[] = $arr[$i];
            }
            $this->expression = implode(' ', $lines);
        }
    }

    public function __toString() 
    {
        return $this->expression;
    }
}
