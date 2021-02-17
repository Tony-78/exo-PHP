<?php
if (isset($_GET['lastname'])) {
    $lastname =  $_GET['lastname'];
} else {
    $lastname = 'Le param n\'est pas présent';
}

if (isset($_GET['firstname'])) {
    $firstname =  $_GET['firstname'];
} else {
    $firstname = 'Le param n\'est pas présent';
}

if (isset($_GET['age'])) {
    $age =  $_GET['age'];
} else {
    $age = 'Le param n\'est pas présent';
}
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie 6 - Exercice 2</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?lastname=Shima&firstname=Brian" role="button">Envoi des paramètres</a>
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?lastname=Shima&firstname=Brian&age=33" role="button">Envoi des paramètres + age</a>
            <a name="submitParam" id="submitParam" class="btn btn-secondary m-1" href="index.php" role="button">Retour INDEX</a>
        </div>
        <?php if (count($_GET) > 0) { ?>
            <p class="text-center"><b>Nom : </b> <?= $lastname ?></p>
            <p class="text-center"><b>Prénom : </b><?= $firstname ?></p>
            <p class="text-center"><b>Age : </b><?= $age ?></p>
        <?php } ?>
        

