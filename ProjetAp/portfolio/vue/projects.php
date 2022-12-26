<div class="box" id="box_projets">
    <h1>Projets</h1>
    <?php
        session_start();
        $dataProjects = yaml_parse_file('ressources/yaml/projects.yaml');
        if (isset($_GET['project'])) {
            $projet = $_GET['project'];
            foreach ($dataProjects[$projet] as $itemProject) { ?>
                <div class="nom_projet"><?php echo $itemProject['nom'] ?></div>
            <?php }
        }else{ ?>
            <?php

            foreach ($dataProjects as $projectTitle => $categoryProject) { ?>
                <a href="index.php?menu=<?php echo $_GET['menu']?>&project=<?php echo $projectTitle ?>" class="btn_project"><?php echo $projectTitle ?></a>
            <?php
            }
            ?>
        <?php
        }
    ?>
</div>
