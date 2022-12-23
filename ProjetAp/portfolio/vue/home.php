<div class="box" id="box_presentation">
    <?php $dataAbout = yaml_parse_file('ressources/yaml/about.yaml');?>
    <div class="nomPrenom">
        <div class="gridNom">Arthur</div>
        <div class="gridNom" id="nom">LAISNEY</div>
    </div>
    <div class="text_home">
        <?php echo $dataAbout['accroche'] ?>
    </div>
    <div class="photo"><img src="ressources/pics/pp.jpg"></div>
</div>