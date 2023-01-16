<?php

namespace App\Controller;
class ErrorController extends AbstractController
{

    public function index()
    {
        self::render('error/404');
    }
}