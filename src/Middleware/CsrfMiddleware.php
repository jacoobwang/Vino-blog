<?php

namespace Ecc\Topic\Middleware;

use Vino\Middleware;
use Vino\Response;

/**
 * Class AuthMiddleware
 * check csrf
 * @package Ecc\Topic\Middleware
 */
class CsrfMiddleware extends Middleware{

    /**
     * middleware main function
     * @return null
     */
    public function handle()
    {
        if ($this->_vertify()) {
            return true;
        } else {
            Response::jsonResponse('Csrf error,pls reload page',1);
            exit;
        }
    }

    /**
     * @return bool
     */
    private function _vertify()
    {
        $session = $this->di('session');
        $token  = $session->get('csrf_token');

        if ($_POST['csrf']==$token) {
            $session->set('csrf_token', '');
            return true;
        }
        return false;
    }

}