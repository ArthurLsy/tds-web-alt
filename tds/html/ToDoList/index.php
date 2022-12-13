<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>
</head>
<body>
<form method="post" action ="include/login.php">
    <input type="next" name="login" placeholder="Login"></input>
    <button type="'submit">Connexion</button>
</form>
<?php
if(isset($_SESSION['user'])){

}else{
    include "include/login.php";
}
?>
</body>
</html>