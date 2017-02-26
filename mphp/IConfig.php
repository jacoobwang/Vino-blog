<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/9/15
 * Time: 2:48 PM
 */

namespace Mphp;
/**
 * Interface IConfig
 * @package Mphp
 */
interface IConfig {
    public function get($key, $default=null);
}
