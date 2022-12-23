<div id="box_competences" class="box">
    <h1>Compétences</h1>
    <?php
    $dataCompetences = yaml_parse_file("ressources/yaml/competences.yaml");
    foreach ($dataCompetences as $domaine => $tbCompetences) {
        echo '<h2>' . $domaine . '</h2>';
        foreach ($tbCompetences as $competence) :?>
            <div class="box_nom" id="barre_<?php echo $competence['nom'] ?>">
                <div class="box_title">
                    <div><?php echo $competence['nom'] ?> :</div>
                    <div id="pourcent"><?php echo $competence['niveau'] ?> %</div>
                </div>
                <div class="barre_progression">
                    <div class="progression" style="width: <?php echo $competence['niveau'] ?>%"></div>
                </div>
            </div>
        <?php endforeach;
    }
    ?>
</div>
<?php include "utils/cv.php"; ?>