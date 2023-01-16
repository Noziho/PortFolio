<?php

namespace App\Controller;
class HomeController extends AbstractController
{

    public static function index()
    {
        self::render('home/home');
    }
}