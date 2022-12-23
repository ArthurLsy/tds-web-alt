<header id="header">
    <div class="navbar">
        <?php
            $dataNav = yaml_parse_file('ressources/yaml/navbar.yaml');
            foreach ($dataNav as $key => $itemNav) { ?>
                <a href="index.php?menu=<?php echo $key ?>" class="<?php echo $itemNav[0] === "Contact" ? "contact" : "menu" ?>"><?php echo $itemNav[0] ?></a>
        <?php } ?>
    </div>
</header>
