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

 class SiteController extends Controller
 {
    public function home()
    {
        $params = [
            'name' => "Sameera"
        ];

        return $this->render('home', $params);

    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function submittedData(Request $request)
    {

    }
 }