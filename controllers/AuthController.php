<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;

/**
 * Class SiteController
 * 
 * @author Sameera Madushan
 * @package app/controllers
 */

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return "Handle Submited Data";
        }

        return $this->render('register');
    }
}