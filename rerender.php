<?php
session_start();

$_SESSION['view'] = "<script>document.write(flag_click)</script>";

echo $_SESSION['view'];




header('location:index.php');