<?php include 'utils/header.php'; ?>

<div id="competences">
    <div id="box_competences">
        <?php
        $data = yaml_parse_file("../ressources/yaml/competences.yaml");
        foreach ($data as $domaine => $tbCompetences) {
            echo '<h1>' . $domaine . '</h1>';
            foreach ($tbCompetences as $competence) :?>
                <div class="box_nom" id="barre_<?php echo $competence['nom'] ?>">
                    <input class="input" id="<?php echo $competence['nom'] ?>" type="checkbox" hidden>
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
    <div id="box_description">
        <?php
            foreach ($data as $domaine => $tbCompetences) {
                foreach ($tbCompetences as $competence) :?>
                    <div class="box_detail" "id=box_<?php echo $competence["nom"] ?>" style="font-size: 0;">
                        <h1><?php echo $competence['nom'] ?> </h1>
                        <div><?php echo $competence['description'] ?> </div>
                    </div>
        <?php endforeach;
            }
        ?>
    </div>
</div>
<script>
let items = document.getElementsByClassName('input')
items[0].show()
</script>

<?php include 'utils/footer.php'; ?>