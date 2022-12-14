<?php include 'utils/header.php'; ?>

<div id="box_formations">
<?php
$data = yaml_parse_file("ressources/yaml/formations.yaml");
foreach ($data as $title => $tbFormations) {
    echo '<h1>' . $title . '</h1>';
    foreach ($tbFormations as $formation) :?>
        <div class="formation">
            <h2 class="title"><?php echo $formation['nom'] ?></h2>
            <h3 class="option">Option : <?php echo $formation['option'] ?></h3>
            <h4 class="annee">Année : <?php echo $formation['annee'] ?></h4>
            <div class="description"><?php echo $formation['description'] ?></div>
        </div>
    <?php endforeach;
}
?>
</div>

<?php include 'utils/footer.php'; ?>
