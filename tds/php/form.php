<?php
session_start();
if(isset($_POST['login'])){
    //$_SESSION['user']=$_POST['login'];
    if($_POST['password']=='1234') {
        $_SESSION['user'] = $user= $_POST['login'];
        echo "Bienvenue $user";
    }else{
        echo 'Mauvais login/password';
    }
}
