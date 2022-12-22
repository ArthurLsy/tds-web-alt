<div id="box_formations" class="box">
    <h1>Formations</h1>
<?php
$dataFormation = yaml_parse_file("ressources/yaml/formations.yaml");
foreach ($dataFormation as $key => $itemFormation) { ?>
        <div  class="formation">
            <div class="titre_formation" id="formation_<?php echo $key?>">
                <div id="formation_<?php echo $key?>" class="title item_formation"><?php echo $itemFormation[0] ?></div>
                <div id="formation_<?php echo $key?>" class="option item_formation">Option : <?php echo $itemFormation[1] ?></div>
                <div id="formation_<?php echo $key?>" class="annee item_formation">Année : <?php echo $itemFormation[2] ?></div>
            </div>
            <div id="formation_content_<?php echo $key?>" class="formation_description hide" >
                <div class="emplacement_formation">
                    <div class="etablissement_formation"><strong>Établissement : </strong><?php echo $itemFormation['3'] ?> </div>
                    <div class="lieu_formation"><strong>Lieu : </strong><?php echo $itemFormation['4'] ?></div>
                </div>
                <div class="commentaire_formation"><?php echo $itemFormation[5] ?></div>
            </div>
        </div>
    <?php } ?>
</div>
<script src="ressources/scripts/openDescriptionFormation.js"></script>
<?php include "utils/cv.php"; ?>