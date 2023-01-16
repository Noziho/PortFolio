<?php

namespace App\Controller;

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

class ProjectController extends AbstractController
{

    public static function index()
    {
        // TODO: Implement index() method.
    }

    /**
     * @throws SQL
     */
    public static function addProject ()
    {
        if (!self::userExist($_SESSION['su_admin']->id) || !isset($_SESSION['su_admin'])) {
            header("Location: /?c=home");
            exit();
        }

        self::render('admin/addProject');

        if (isset($_POST['submit'])) {
            if (!self::formIsset('title')) {
                header("Location: /?c=home");
                exit();
            }
            $project = R::dispense('ndmp22project');
            $project->title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

            R::store($project);
        }
    }
}