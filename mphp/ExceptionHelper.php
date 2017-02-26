<?php

namespace Mphp;


/**
 * Class ExceptionHelper
 * @package Cutephp
 */
class ExceptionHelper extends \Exception {

    public static function create($msg, $code) {
        return new \Exception($msg, $code);
    }

}
