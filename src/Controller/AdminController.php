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
}