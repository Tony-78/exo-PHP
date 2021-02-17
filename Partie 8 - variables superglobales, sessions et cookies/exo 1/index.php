<?php
// var_dump($_SERVER);
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $ipAdress = $_SERVER["REMOTE_ADDR"];
    $serverName = $_SERVER["SERVER_NAME"];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 8 - Exo 1</title>
</head>
<body>

<p>
Faire une page HTML permettant de donner à l'utilisateur :<br>
- son User Agent<br>
- son adresse ip<br>
- le nom du serveur
</p>


<!-- User Agent -->
<p>User agent : <?= $userAgent; ?></p>
<!-- Adresse IP du client qui demande la page courante. -->
<p>Votre adresse IP : <?= $ipAdress; ?></p>
<!-- Nom du serveur hôte qui exécute le script -->
<p>Nom du serveur : <?= $serverName; ?></p>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>