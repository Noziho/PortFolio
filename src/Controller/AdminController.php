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

    public static function deleteProject(int $id = null)
    {
        if (null === $id) {
            header("Location: /?c=home");
            exit();
        }

        $project = R::findOne('ndmp22project', 'id=?', [$id]);

        if (!$project) {
            $_SESSION['error'] = "Le projet $id n'existe pas";
            header("Location: /?c=home");
            exit();
        }

        R::trash($project);
        $_SESSION['success'] = "Le projet $id à été supprimé avec succès";
        header("Location: /?c=home");
    }

    public static function editProject (int $id = null)
    {
        if (null === $id) {
            header("Location: /?c=home");
            exit();
        }

        $project = R::findOne('ndmp22project', 'id=?', [$id]);

        if (!$project) {
            $_SESSION['error'] = "Le projet $id n'existe pas";
            header("Location: /?c=home");
            exit();
        }

        if (isset($_POST['submit'])) {
            if (!self::formIsset('titleProject', 'prodLink', 'githubLink')) {
                $_SESSION['error'] = "Un ou plusieurs champs sont manquants.";
                header("Location: /?c=home");
                exit();
            }

            if (isset($_FILES['projectImg'])) {

                $title = filter_var($_POST['titleProject'], FILTER_SANITIZE_STRING);
                $prodLink = filter_var($_POST['prodLink'], FILTER_SANITIZE_STRING);
                $githubLink = filter_var($_POST['githubLink'], FILTER_SANITIZE_STRING);

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

                    $_SESSION['success'] = "Modification validé.";
                    header("Location: /?c=home");
                    exit();
                }
                else {
                    $tmp_name = $_FILES['projectImg']['tmp_name'];
                    $img_name = ProjectController::getRandomName($_FILES['projectImg']['name']);
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
                dd("SAMRCHPA");
            }
        }
        else {
            self::render('admin/editProject', [
                "project" => $project,
            ]);
        }
    }
}