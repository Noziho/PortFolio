<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noziho | Web developer</title>
    <link rel="icon" href="/build/img/Noziho.png">
</head>
<body>
<header class="padding-1">
    <a href="http://localhost:8000"><img id="myLogo" src="/build/img/Noziho-transformed.png" alt="Noziho Logo"></a>
    <?php
    if (isset($_SESSION['su_admin'])) { ?>
        <div id="adminMenu">
            <a href="/?c=admin&a=addProject">Ajout de projet</a>
            <a href="/?c=admin&a=logout">Se déconnecter</a>
        </div>
        <?php
    }
    ?>
</header>

<?= $html ?>

<footer data-aos="fade-up">
    <div class="contactInformation">
        <h2>Social media</h2>
        <div><a href="https://github.com/Noziho">GitHub</a></div>
        <div><a href="https://www.linkedin.com/in/noah-decroix-7b5b48223/">LinkedIn</a></div>
        <div>Notizou#1030</div>
    </div>
</footer>


<script src="https://kit.fontawesome.com/e40f017040.js" crossorigin="anonymous"></script>
<script src="/build/js/app-bundle.js"></script>
</body>
</html>