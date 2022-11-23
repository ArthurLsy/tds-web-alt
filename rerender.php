<?php
session_start();

if (isset($_GET['menu'])) {
    $_SESSION['view'] = $_GET['menu'];
}










header('location:index.php');