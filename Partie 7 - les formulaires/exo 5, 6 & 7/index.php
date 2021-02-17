<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = "/^[a-zA-Z]+$/";

if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {

    // Sécurisation des données, regex pour verifier prénom et nom
    // preg_match : permet de rechercher des motifs bien précis au sein d’une chaîne de caractères
    // htmlspecialchars : Convertit les caractères spéciaux en entités HTML
    if (preg_match($regexName, $_POST["firstname"])) {
        $securedFirstname = htmlspecialchars($_POST["firstname"]);
    } else {
        $securedFirstname = "<i>Mauvais format</i>";
    }

    if (preg_match($regexName, $_POST["lastname"])) {
        $securedLastname = htmlspecialchars($_POST["lastname"]);
    } else {
        $securedLastname = "<i>Mauvais format</i>";
    }

}
if (isset($_FILES["file"])) {
    // Tableau contenant nos extensions , pour validité du fichier ou non
    $extensions = array(".pdf", ".PDF");
    // Récupérer l'extension du fichier à partir du name       , pathinfo marche également (correction Alexis)
    $extensionFile = strrchr($_FILES["file"]["name"], ".");

    // Condition pour savoir si le fichier uploadé est OK
    // in_array : recherche dans un array. On recherche si $extensionFile est présent dans $extensions
    if (!in_array($extensionFile, $extensions)) {
        $securedFile = "Le fichier transmis doit être un .pdf";
    } else {
        $securedFile = "OK";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 7 - Exo 5, 6, 7</title>
</head>

<body>

    <p>
        Créer un formulaire sur la page **index.php** avec :<br><br>
        - Une liste déroulante pour la civilité (Mr ou Mme)<br>
        - Un champ texte pour le nom<br>
        - Un champ texte pour le prénom <br><br>

        Ce formulaire doit rediriger vers la page **index.php**.<br>
        Vous avez le choix de la méthode.<br><br>

        Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, <br>
        le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.<br>
        Utiliser qu'une seule page.<br><br>

        Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.<br><br>

        Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**.
    </p>

    <?php
    if ($showForm) {
    ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <select name="gender">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
            </div>
            <div>
                <label for="firstname">Votre prénom : </label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div>
                <label for="lastname">Votre nom : </label>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div>
                <!-- Il faut ajouter l'attribut enctype au form si on veut ajouter des fichiers au formulaire -->
                <input type="file" name="file" />
            </div>
            <input type="submit" value="Valider">
        </form>
    <?php
    } else {
    ?>
        <p>Civilité : <?= $_POST["gender"]; ?></p>
        <p>Prénom : <?= $securedFirstname; ?></p>
        <p>Nom : <?= $securedLastname; ?></p>
        <!-- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires -->
        <!-- lien ci-dessus : explication des traitements de l'envoi en PHP -->
        <!-- https://www.youtube.com/watch?v=kkkQoGEzP0w -->
        <!-- ci-dessous : on affiche le nom du fichier sélectionné 
               Pour chaque fichier envoyé, une variable  $_FILES['nom_du_champ'] est créée. cette variable est un tableau qui contient plusieurs infos, voir lien openclassrooms.-->
        <p>Nom du fichier : <?= $_FILES["file"]["name"]; ?></p>
        <p>Extension du fichier : <?= $extensionFile ?></p>
        <p>Validité du format du fichier : <?= $securedFile ?></p>
    <?php
    }
    ?>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>