<?php

namespace App\Controller;
use RedBeanPHP\R;

Abstract class AbstractController
{
    abstract public static function index();

    /**
     * @param string $template
     * @param array $data
     * @return void
     * Render function for printing View.
     */
    public static function render(string $template, array $data = []): void
    {
        ob_start();
        require __DIR__ . "/../../View/" . $template . ".html.php";
        $html = ob_get_clean();
        require __DIR__ . "/../../View/base.html.php";
    }

    public static function formIsset(...$inputNames): bool
    {
        foreach ($inputNames as $name) {
            if (!isset($_POST[$name]) || empty($_POST[$name])) {
                return false;
            }
        }
        return true;
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
}