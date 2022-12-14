<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
$_SESSION['view'] = null;
?>

<?php include 'vue/utils/header.php'; ?>

<script>flag_click = null</script>

<?php if ($_SESSION['view'] === null) {
    include 'vue/menu.php';
} ?>

<?php if ($_SESSION["view"] === 1) {
    include 'vue/tds.php';
} ?>

<?php include 'vue/utils/footer.php'; ?>


