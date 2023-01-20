<?php

namespace App\Controller;
use RedBeanPHP\R;
use RedUNIT\Base\Dispense;

class HomeController extends AbstractController
{

    public static function index()
    {
        $projects = R::findAll('ndmp22project', 'ORDER by id DESC');
        self::render('home/home', [
            'projects' => $projects,
        ]);
    }
}