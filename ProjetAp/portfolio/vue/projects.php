<div class="box" id="box_projets">
    <h1><a href="index.php?menu=<?php echo $_GET['menu']?>" id="projects_page_title">Projets</a></h1>
    <?php
        session_start();
        $dataProjects = yaml_parse_file('ressources/yaml/projects.yaml');
        if (isset($_GET['project'])) {
            $projet = $_GET['project']; ?>
            <div id="projects_list">
            <?php
            foreach ($dataProjects[$projet] as $itemProject) { ?>
                <div class="project">
                    <div class="date_title_project deployProject" id="date_title_project_<?php echo $itemProject['id'] ?>">
                        <div class="project_title" id="date_title_project_<?php echo $itemProject['id'] ?>"><?php echo $itemProject['nom'] ?></div>
                        <div class="project_date" id="date_title_project_<?php echo $itemProject['id'] ?>">Date de réalisation : <?php echo $itemProject['date'] ?></div>
                    </div>
                    <div class="description_project hide" id="description_project_<?php echo $itemProject['id'] ?>"><?php echo $itemProject['desc'] ?></div>
                    <a href="<?php echo $itemProject['url'] ?>" class="btn_project">Ouvrir</a>
                </div>
            <?php }
            ?>
            </div>
            <?php
        }else{ ?>
            <?php

            foreach ($dataProjects as $projectTitle => $categoryProject) { ?>
                <a href="index.php?menu=<?php echo $_GET['menu']?>&project=<?php echo $projectTitle ?>" class="btn_project_category"><?php echo $projectTitle ?></a>
            <?php
            }
            ?>
        <?php
        }
    ?>
</div>
<script src="../ressources/scripts/openProjectDescription.js"></script>
