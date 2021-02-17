<?php

require_once "index_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Site de rencontre VENUS</title>
</head>

<body class="wallpaper">

    <div class="d-flex justify-content-center mt-3">
        <img src="assets/img/logo3.png" href="index.php" class="logo-size" alt="logo">
    </div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="form" action="index.php" method="post">
                    <h1 class="text-center slogan-color">L'amour est là</h1>
                    <h2 class="text-center register mt-3">Inscription</h2>
                    <div class="mt-3">
                        <label for="lastname" class="bold">Nom :</label>
                        <input type="text" name="lastname" id="lastname" class="form-control border-0" placeholder="Votre nom" value="<?= isset($securedLastname) ? $securedLastname : "" ?>">
                        <p style="color:white" class="text-center"><?= isset($error["Lastname"]) ? $error["Lastname"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <label for="firstname" class="bold">Prénom :</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="<?= isset($securedFirstname) ? $securedFirstname : "" ?>">
                        <p style="color:white;" class="text-center"><?= isset($error["Firstname"]) ? $error["Firstname"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <label for="age" class="bold">Age :</label>
                        <input type="text" name="age" id="age" class="form-control" placeholder="Votre âge" value="<?= isset($securedAge) ? $securedAge : "" ?>">
                        <p style="color:white;" class="text-center"><?= isset($error["Age"]) ? $error["Age"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <label for="gender" class="bold">Genre :</label>
                        <select name="gender">
                            <option value="" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Veuillez choisir") ? "selected" : "" ?>>Veuillez choisir</option>
                            <option value="Homme" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Homme") ? "selected" : "" ?>>Homme</option>
                            <option value="Femme" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Femme") ? "selected" : "" ?>>Femme</option>
                        </select>
                        <p style="color:white;"><?= isset($error["Gender"]) ? $error["Gender"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <label for="postalCode" class="bold">Code postal :</label>
                        <input type="text" name="postalCode" id="postalCode" class="form-control" placeholder="75000" value="<?= isset($securedPostalCode) ? $securedPostalCode : "" ?>">
                        <p style="color:white;"class="text-center" ><?= isset($error["PostalCode"]) ? $error["PostalCode"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="bold">Adresse email :</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com" value="<?= isset($securedEmail) ? $securedEmail : "" ?>">
                        <p style="color:white;" class="text-center"><?= isset($error["Mail"]) ? $error["Mail"] : "" ?></p>
                    </div>
                    <div class="mt-3">
                        <p class="bold">Je recherche :</p>
                        <div class="d-flex justify-content-around">
                            <div>
                                <input type="radio" id="male" name="type" value="Homme" <?= isset($_POST["type"]) && ($_POST["type"] == "Homme") ? "checked" : "" ?>>
                                <label for="male" class="bold">Homme</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="type" value="Femme" <?= isset($_POST["type"]) && ($_POST["type"] == "Femme") ? "checked" : "" ?>>
                                <label for="female" class="bold">Femme</label>
                            </div>
                            <div>
                                <input type="radio" id="mixed" name="type" value="Homme & Femme" <?= isset($_POST["type"]) && ($_POST["type"] == "Homme & Femme") ? "checked" : "" ?>>
                                <label for="mixed" class="bold">Homme & Femme</label>
                            </div>
                        </div>
                        <p style="color:white;" class="text-center"><?= isset($error["Type"]) ? $error["Type"] : "" ?></p>
                    </div>

                    <div class="mt-4 mb-5 d-flex justify-content-center">
                        <input type="submit" name="submitButton" class="btn button-color btn-md" value="Rencontrer nos célibataires">
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>