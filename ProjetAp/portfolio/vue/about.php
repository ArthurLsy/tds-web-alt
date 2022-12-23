<div class="box" id="box_about">
    <h1>A propos</h1>
    <?php $dataAbout = yaml_parse_file('ressources/yaml/about.yaml');?>
    <div class="accroche"><?php echo $dataAbout['accroche'] ?></div>
    <div class="photo_about"><img src="../ressources/pics/pp.jpg" alt=""></div>
    <div class="presentation_about"><?php echo $dataAbout['presentation'] ?></div>
</div>