<?php

namespace Vino;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;

/**
 * Class ExceptionHelper
 */
class Exception extends \Exception {

    public static function create($msg, $code) 
    {
        return new \Exception($msg, $code);
    }

}
