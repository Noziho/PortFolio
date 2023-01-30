<?php

use App\Controller\AdminController;

if (isset($_SESSION['su_admin'])) {
    if (!AdminController::userExist($_SESSION['su_admin']->id)) {
        header("Location: /?c=home");
        exit();
    }
}
?>

<form action="/?c=admin&a=login" method="post">
    <div>
        <label for="username">Nom d'utilisateur: </label>
        <input type="text" id="username" name="username" required>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <input type="submit" name="submit" value="Se connecter">
    </div>
</form>
