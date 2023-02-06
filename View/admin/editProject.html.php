<?php

use App\Controller\AdminController;

if (isset($data['project'])) {
    $project = $data['project'];
}

if (isset($_SESSION['su_admin'])) {
    if (!AdminController::userExist($_SESSION['su_admin']->id)) {
        header("Location: /?c=home");
        exit();
    }
}
?>

<form action="/?c=admin&a=editProject&id=<?= $project->id?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="titleProject">Titre:</label>
        <input type="text" id="titleProject" name="titleProject" value="<?= $project->title ?>">
    </div>

    <div>
        <label for="projectImg">Miniature:</label>
        <input type="file" id="projectImg" name="projectImg" value="<?= $project->project_img ?>">
    </div>

    <div>
        <label for="prodLink">Lien de production:</label>
        <input type="text" id="prodLink" name="prodLink" value="<?= $project->prod_link ?>">
    </div>

    <div>
        <label for="githubLink">Lien GitHub:</label>
        <input type="text" id="githubLink" name="githubLink" value="<?= $project->github_link ?>">
    </div>

    <div>
        <input type="submit" name="submit" required>
    </div>
</form>