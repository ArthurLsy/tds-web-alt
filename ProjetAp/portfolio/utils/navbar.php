<header id="header">
    <div class="navbar">
        <?php
            $dataNav = yaml_parse_file('ressources/yaml/navbar.yaml');
            foreach ($dataNav as $itemNav) { ?>
                <a href="<?php echo $itemNav[1] ?>" class="<?php echo $itemNav[0] === "Contact" ? "contact" : "menu" ?>"><?php echo $itemNav[0] ?></a>
        <?php } ?>
    </div>
</header>
