<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 7/8/15
 * Time: 11:40 AM
 */

namespace Vino;

/**
 * Interface ILogger
 * @package Vino
 */
interface ILogger {
    public function debug();
    public function info();
    public function warn();
    public function error();
    public function alert();
    public function emerg();
    public function get($tag_name);
}
