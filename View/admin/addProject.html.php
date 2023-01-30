<?php

use App\Controller\AdminController;

if (isset($_SESSION['su_admin'])) {
    if (!AdminController::userExist($_SESSION['su_admin']->id)) {
        header("Location: /?c=home");
        exit();
    }
}
?>
<form action="/?c=project&a=addProject" method="post" enctype="multipart/form-data">
    <div>
        <label for="titleProject">Titre:</label>
        <input type="text" id="tittleProject" name="titleProject">
    </div>

    <div>
        <label for="projectImg">Miniature:</label>
        <input type="file" id="projectImg" name="projectImg">
    </div>

    <div>
        <label for="prodLink">Lien de production:</label>
        <input type="text" id="prodLink" name="prodLink">
    </div>

    <div>
        <label for="githubLink">Lien GitHub:</label>
        <input type="text" id="githubLink" name="githubLink">
    </div>

    <div>
        <input type="submit" name="submit" required>
    </div>
</form>