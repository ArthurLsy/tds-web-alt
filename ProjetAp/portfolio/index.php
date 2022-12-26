<?php

include 'vue/utils/header.php';

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    foreach ($dataNav as $key => $itemNav) {
        if ($key == $menu) {
            include ''.$itemNav[1].'';
        }
    }
}else{
    header('Location: index.php?menu=1');
}


include 'vue/utils/footer.php';
?>
