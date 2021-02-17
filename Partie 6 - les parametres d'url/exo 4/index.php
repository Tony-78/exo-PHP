<?php 
$language = "";
$server = "";

if (isset($_GET["language"]) && isset($_GET["server"])) {
    $language = $_GET["language"];
    $server = $_GET["server"];
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 6 - Exo 4</title>
</head>
<body>

<p>
Voici l'URL à étudier :<br><br>

index.php?language=PHP&server=WAMP<br><br>

Faire une page index.php.<br>
Sur cette page faire 2 boutons :<br><br>

Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que tous les paramètres existent :<br>
S'ils sont présents, les afficher.<br>
Dans le cas contraire ne rien afficher.<br>
Le deuxieme "bouton" doit permettre de revenir à la page index.php.
</p>

<a class="btn btn-primary" href="index.php?language=PHP&amp;server=WAMP">Envoi des paramètres</a>
<a class="btn btn-secondary" href="index.php">Retour Index</a>

<p><?php echo $language ?></p>
<p><?php echo $server ?></p>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>