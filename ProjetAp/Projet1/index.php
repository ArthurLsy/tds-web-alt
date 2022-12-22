<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="index.php?category=1">1</a></li>
    <li><a href="index.php?category=2">2</a></li>
    <li><a href="index.php?category=3">3</a></li>
    <?php $category = $_GET['category']; // Récupère la valeur de la variable "category" de l'URL

        $categories =yaml_parse_file('index.yaml'); // Récupère toutes les catégories depuis la base de données

        foreach ($categories as $cat) {
          if ($cat['id'] == $category) {
            // Affiche la catégorie uniquement si l'ID de la catégorie correspond à la variable "category" de l'URL
            echo '<h2>'.$cat['name'].'</h2>';
            echo '<p>'.$cat['description'].'</p>';
          }
        }
    ?>
</ul>
</body>
</html>