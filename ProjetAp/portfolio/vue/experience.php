<div id="box_experiences" class="box">
    <h1>Expériences</h1>
    <?php
        $dataExperiences = yaml_parse_file('ressources/yaml/experiences.yaml');
        foreach ($dataExperiences as $key => $itemFormation) { ?>
        <div class="experience">
            <h2 class="titre_experience"><?php echo $itemFormation[1] ?></h2>
            <div class="nom_date_experience">
                <div class="nom_experience">
                    <div class="poste item_experience">
                        <strong>Poste occupé :</strong>
                        <?php echo $itemFormation[0] ?>
                    </div>
                    <div class="entreprise item_experience">
                        <strong>Entreprise :</strong>
                        <?php echo $itemFormation[1] ?>
                    </div>
                </div>
                <div class="dates_experience">
                    <div class="dateDebut item_experience">
                        <strong>Date de début :</strong>
                        <?php echo $itemFormation[2] ?>
                    </div>
                    <div class="dateFin item_experience">
                        <strong>Date de fin :</strong>
                        <?php echo $itemFormation[3] ?>
                    </div>
                </div>
            </div>
            <div class="lieu item_experience">
                <strong>Lieu :</strong>
                <?php echo $itemFormation[4] ?>
            </div>
            <div class="taches item_experience">
                <strong>Tâches réalisées :</strong>
                <?php echo $itemFormation[5] ?>
            </div>
        </div>
    <?php } ?>
</div>
<?php include "utils/cv.php"; ?>