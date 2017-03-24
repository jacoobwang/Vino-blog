<?php

namespace Ecc\Topic\Middleware;

use Vino\Middleware;

/**
 * Class AuthMiddleware
 * auth user
 * @package Ecc\Topic\Middleware
 */
class AuthMiddleware extends Middleware{

    /**
     * middleware main function
     * @return null
     */
    public function handle()
    {
        if ($this->_auth()) {
            return true;
        }
        $this->redirect(BASE_URL.'admin/login');
    }

    /**
     * @return boolean
     */
    private function _auth()
    {
        $session = $this->di('session');
        if ($session->exist('user')) {
            return true;
        }
        return false;
    }

}