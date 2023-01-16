<?php

namespace App\Controller;

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

class AdminController extends AbstractController
{

    public static function index()
    {
        self::render('admin/admin');
    }

    /**
     * @throws SQL
     */

    public static function login()
    {

        self::render('admin/admin');

        if (isset($_POST['submit'])) {
            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            $password = $_POST['password'];
            $user = R::findOne('ndmp22suadmin', 'name=?', [$username]);

            if (!$user) {
                header("Location: /?c=home");
                exit;
            }

            if (!password_verify($password, $user->password)) {
                self::index();
                exit;
            }

            $_SESSION['su_admin'] = $user;
            header("Location: /?c=home");

        }
    }

    public static function logout()
    {
        session_destroy();
        header("Location: /?c=home");
    }

    public static function userExist(int $id): bool
    {
        if (null === $id) {
            header("Location: /?c=home");
            exit;
        }

        $user = R::findOne('ndmp22suadmin', 'id=?', [$id]);

        if (!$user) {
            return false;
        }
        return true;


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