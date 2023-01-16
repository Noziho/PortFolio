<form action="/?c=project&a=addProject" method="post">
    <div>
        <label for="titleProject">Titre:</label>
        <input type="text" id="tittleProject" name="titleProject">
    </div>

    <div>
        <label for="img">Miniature:</label>
        <input type="file" id="img" name="img">
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