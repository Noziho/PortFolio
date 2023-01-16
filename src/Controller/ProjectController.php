<?php

namespace App\Controller;

class ProjectController extends AbstractController
{

    public static function index()
    {
        // TODO: Implement index() method.
    }

    public function addProject () {

        if (!isset($_SESSION['su_admin'])) {
            self::render("home/home");
            exit();
        }

    }
}