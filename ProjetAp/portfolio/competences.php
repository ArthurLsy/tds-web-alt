<?php include 'utils/header.php'; ?>

<div id="competences">
    <div id="box_competences">
        <?php
        $data = yaml_parse_file("ressources/yaml/competences.yaml");
        foreach ($data as $domaine => $tbCompetences) {
            echo '<h1>' . $domaine . '</h1>';
            foreach ($tbCompetences as $competence) :?>
                <div class="box_nom" id="barre_<?php echo $competence['nom'] ?>">
                    <div class="box_title">
                        <div><?php echo $competence['nom'] ?> :</div>
                    </div>
                    <div class="box_progression">
                        <div id="pourcent"><?php echo $competence['niveau'] ?> %</div>
                        <div class="barre_progression">
                            <div class="progression" style="width: <?php echo $competence['niveau'] ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        }
        ?>
    </div>
</div>

<?php include 'utils/footer.php'; ?>