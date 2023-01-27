<?php
if (isset($data['project'])) {
    $project = $data['project'];
}

?>

<form action="/?c=admin&a=editProject&id=<?= $project->id?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="titleProject">Titre:</label>
        <input type="text" id="tittleProject" name="titleProject" value="<?= $project->title ?>">
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