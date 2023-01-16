<?php

namespace App\Controller;
class ErrorController extends AbstractController
{

    public static function index()
    {
        self::render('error/404');
    }

    public static function error404 ()
    {
        self::render('error/404');
    }
}