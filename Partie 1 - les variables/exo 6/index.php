<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exo 6</title>
</head>
<body>

<p>
Créer une variable **name** et l'initialiser avec la valeur de votre choix.<br>  
Afficher : "Bonjour" + **name** + ", comment vas tu ?".
</p>


<?php
$name = "Tony";
echo "Bonjour " . $name . ", comment vas-tu ?";
?>

<!-- echo court, directement dans une balise p -->
<p>Bonjour <?= $name ?>, comment vas-tu ?</p>

</body>
</html>