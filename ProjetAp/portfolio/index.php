<?php

include 'utils/header.php';

$menu = $_GET['menu'];

foreach ($dataNav as $key => $itemNav) {
    if ($key == $menu) {
        include ''.$itemNav[1].'';
    }
}

include 'utils/footer.php';
