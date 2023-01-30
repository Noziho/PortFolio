<?php

namespace App\Controller;

use Exception;
use JetBrains\PhpStorm\NoReturn;
use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

class ProjectController extends AbstractController
{

    public static function index()
    {
        self::render('admin/addProject');
    }

    public static function getRandomName(string $fileName): string
    {
        $infos = pathinfo($fileName);

        try {
            $bytes = random_bytes(15);
        } catch (Exception $e) {
            $bytes = openssl_random_pseudo_bytes(15);
        }

        return bin2hex($bytes) . '.' . $infos['extension'];
    }

    /**
     * @throws SQL
     */
    #[NoReturn] public static function addProject ()
    {
        if (!self::userExist($_SESSION['su_admin']->id) || !isset($_SESSION['su_admin'])) {
            header("Location: /?c=home&f=denied");
            exit();
        }


        if (isset($_POST['submit'])) {
            if (!self::formIsset('titleProject', 'prodLink', 'githubLink')) {
                $_SESSION['error'] = "Un ou plusieurs champ sont manquant.";
                header("Location: /?c=home");
                exit();
            }

            if (isset($_FILES['projectImg'])) {

                $title = filter_var($_POST['titleProject'], FILTER_SANITIZE_STRING);
                $prodLink = filter_var($_POST['prodLink'], FILTER_SANITIZE_STRING);
                $githubLink = filter_var($_POST['githubLink'], FILTER_SANITIZE_STRING);

                $project = R::dispense('ndmp22project');
                $project->title = $title;
                $project->prod_link = $prodLink;
                $project->github_link = $githubLink;

                if ($_FILES['projectImg']['name'] === '') {

                    $project->title = $title;
                    $project->prod_link = $prodLink;
                    $project->github_link = $githubLink;
                    $project->project_img = "defaultImage";
                    $project->img_extension = "jpg";

                    R::store($project);

                    $_SESSION['success'] = "Ajout validé.";
                    header("Location: /?c=home");
                    exit();
                }
                else {
                    $tmp_name = $_FILES['projectImg']['tmp_name'];
                    $img_name = self::getRandomName($_FILES['projectImg']['name']);
                    if (!is_dir('img/')) {
                        mkdir('img/', '0755');
                    }

                    if (self::checkMimeType($tmp_name)) {

                        move_uploaded_file($tmp_name, 'img/' . $img_name);
                        $sanitize_img_name = preg_replace('/\\.[^.\\s]{2,4}$/', '', $img_name);

                        $infos = pathinfo($_FILES['projectImg']['name']);

                        $project->title = $title;
                        $project->prod_link = $prodLink;
                        $project->github_link = $githubLink;
                        $project->project_img = $sanitize_img_name;
                        $project->img_extension = $infos['extension'];

                        R::store($project);

                        $_SESSION['success'] = "Ajout validé.";
                        header("Location: /?c=home");
                    }
                    else {
                        $_SESSION['error'] = "Le type de fichier n'est pas valide";
                        header("Location: /?c=home");
                        exit();
                    }
                }
            } else {
                $_SESSION['error'] = "Le champ file est manquant";
                header("Location :/?c=home");
                exit();
            }
        }
    }
}