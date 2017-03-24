<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/16/15
 * Time: 4:35 PM
 */

namespace Vino;

class Env {
    private $_values = array();

    public function get($key) 
    {
        if (isset($this->_values[$key])) {
            return $this->_values[$key];
        } else {
            return null;
        }
    }

    public function set($key, $value) 
    {
        $this->_values[$key] = $value;
    }
}
