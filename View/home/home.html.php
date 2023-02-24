<div class="container">
    <div class="spacer">
        <div class="presentation">
            <h1 id="title"></h1>
            <div id="cursor"></div>
            <div id="personalInformation">
                    <p>Nom: <span class="info">Decroix</span></p>
                    <p>Prénom: <span class="info">Noah</span></p>
                    <p>Âge: <span class="info">20</span></p>
                    <p>Passion: <span class="info">Dév web, nouvelles tech, jeux vidéos</span></p>
            </div>
            <div id="skills">
                <h3>Compétences: </h3>
                <div id="frontSkills">
                    <h3 class="info">Front: </h3>
                    <p>HTML</p>
                    <p>CSS/SCSS</p>
                    <p>JavaScript/TypeScript/Jquery</p>
                    <p>Webpack/NPM</p>
                </div>

                <div id="backSkills">
                    <h3 class="info">Back: </h3>
                    <p>PHP</p>
                    <p>SQL</p>
                    <p>Symfony</p>
                    <p>Utilisations d'ORM, RedBean, Doctrine</p>
                    <p>Composer</p>
                </div>
            </div>
        </div>
        <div id="intro">
            <h2>Recherche :</h2>
            <p>Je suis actuellement à la recherche d'un stage d'une durée de 3 mois du 9 Mai au 28 Juillet dans l'objectif de validé ma formation CDA (concepteur développeur d'application).</p>
            <p>Le projet effectué en stage ou l'un des projets effectué sera le sujet de mon oral de fin d'année permettant de validé ma formation et l'obtention du diplôme.</p>
        </div>

        <div id="myProjects">
            <a href="#projects"><i class="fa-solid fa-circle-arrow-down"></i></a>
        </div>
    </div>

    <div class="projectContainer" id="projects">
        <?php
            if (isset($data['projects'])) {
                $projects = $data ['projects'];
                foreach ($projects as $project) {?>
                    <div class="project padding-2 margin-inline-2 margin-top-4" data-aos="fade-up">
                        <div>
                            <h1 class="projectTitle"><?= $project->title ?></h1>
                            <div class="thumbnailContainer  margin-top-1">
                                <img class="projectThumbnail" src="/img/<?= $project->project_img ?>.<?= $project->img_extension?>" alt="Project Image">
                            </div>

                            <div class="margin-top-2">
                                <a href="<?= $project->prodLink ?>" target="_blank">Lien de production</a>
                            </div>

                            <div class="margin-top-1">
                                <a href="<?= $project->githubLink ?>" target="_blank">Lien GitHub</a>
                            </div>
                            <?php
                                if (isset($_SESSION['su_admin'])) {?>
                                        <div id="edit_delete_container">
                                            <button class="add_delete_button"><a href="/?c=admin&a=deleteProject&id=<?= $project->id ?>">Delete</a></button>
                                            <button class="add_delete_button"><a href="/?c=admin&a=editProject&id=<?= $project->id ?>">Edit</a></button>
                                        </div><?php
                                }
                            ?>
                        </div>
                    </div><?php
                }
            }
        ?>
    </div>
</div>