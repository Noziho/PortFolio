<div class="container">
    <div class="spacer">
        <h1 id="title"></h1>
        <div id="cursor"></div>
        <div class="spacerContent">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A amet aperiam autem culpa dolorem ducimus exercitationem expedita fugiat illo, iusto officia optio
                possimus quam, quidem ratione totam vel veritatis, vitae.
            </p>
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