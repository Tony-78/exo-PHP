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
    <link rel="stylesheet" href="style.css">
    <title>Partie 10 - TP 1</title>
</head>

<body>

    <?php
    if ($showForm) {
    ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="form" action="index.php" method="post">
                        <h1 class="text-center text-info">Formulaire d'inscription</h1>
                        <div class="mt-5">
                            <label for="lastname">Nom :</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="mt-3">
                            <label for="firstname">Prénom :</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom">
                        </div>
                        <div class="mt-3">
                            <label for="birthDate">Date de naissance :</label>
                            <input type="text" name="birthDate" id="birthDate" class="form-control" placeholder="01/01/1995 ou 01-01-1995 ou 01.01.1995">
                        </div>
                        <div class="mt-3">
                            <label for="birthCountry">Pays de naissance :</label>
                            <input type="text" name="birthCountry" id="birthCountry" class="form-control" placeholder="Votre pays de naissance">
                        </div>
                        <div class="mt-3">
                            <label for="nationality">Nationalité :</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Votre nationalité">
                        </div>
                        <div class="mt-3">
                            <label for="address">Adresse :</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Votre adresse">
                        </div>
                        <div class="mt-3">
                            <label for="email">Adresse email :</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com">
                        </div>
                        <div class="mt-3">
                            <label for="phoneNumber">Numéro de téléphone :</label>
                            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="0... ou +33...">
                        </div>
                        <div class="mt-3">
                            <label for="adress">Diplôme :</label>
                            <select name="diploma">
                                <option value="Veuillez choisir">Veuillez choisir</option>
                                <option value="Aucun">Aucun</option>
                                <option value="BAC">BAC</option>
                                <option value="BAC + 2">BAC + 2</option>
                                <option value="BAC + 3 ou supérieur">BAC + 3 ou supérieur</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="poleemploiNumber">Numéro Pôle emploi :</label>
                            <input type="text" name="poleemploiNumber" id="poleemploiNumber" class="form-control" placeholder="Votre numéro d'identifiant Pôle emploi">
                        </div>
                        <div class="mt-3">
                            <label for="badge">Nombre de badge :</label>
                            <input type="text" name="badge" id="badge" class="form-control" placeholder="Votre nombre de badge">
                        </div>
                        <div class="mt-3">
                            <label for="codecademyLink">Lien codecademy</label>
                            <input type="url" name="codecademyLink" id="codecademyLink" class="form-control" placeholder="Votre lien codecademy">
                        </div>
                        <div class="mt-3">
                            <label for="heroTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                            <textarea id="heroTextarea" name="heroTextarea" rows="5" placeholder="blablabla..."></textarea>
                        </div>
                        <div class="mt-3">
                            <label for="hackTextarea">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                            <textarea id="hackTextarea" name="hackTextarea" rows="5" placeholder="blablabla..."></textarea>
                        </div>
                        <div class="mt-3">
                            <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                            <div>
                                <input type="radio" id="yes" name="expYesNo" value="Oui">
                                <label for="yes">Oui</label>
                            </div>
                            <div>
                                <input type="radio" id="no" name="expYesNo" value="Non">
                                <label for="no">Non</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-5 d-flex justify-content-between">
                            <input type="submit" name="submitButton" class="btn btn-info btn-md" value="Valider le formulaire">
                            <input type="reset" class="btn btn-secondary btn-md" value="Remise à zéro">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
    } else {
    ?>

        <?php
        if (count($error) == 0) {
        ?>

            <h1 class="text-center text-info mt-5">Merci pour votre inscription</h1>
            <p><?php var_dump($_POST); ?></p>
            <?php 
                echo $securedAddress;
                echo $securedBadge;
                echo $securedBirthCountry;
                echo $securedBirthDate;
                echo $securedCodecademyLink;
                echo $securedDiploma;
                echo $securedEmail;
                echo $securedExpQuestion;
                echo $securedFirstname;
                echo $securedHackTextarea;
                echo $securedHeroTextarea;
                echo $securedLastname;
                echo $securedNationality;
                echo $securedPhoneNumber;
                echo $securedPoleEmploiNumber;
            ?>

        <?php
        } else {
        ?>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form class="form" action="index.php" method="post">
                            <h1 class="text-center text-info">Formulaire d'inscription</h1>
                            <div class="mt-5">
                                <label for="lastname">Nom :</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom" value="<?= isset($securedLastname) ? $securedLastname : "" ?>">
                                <span style="color:red;"><?= isset($error["Lastname"]) ? $error["Lastname"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="firstname">Prénom :</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="<?= isset($securedFirstname) ? $securedFirstname : "" ?>">
                                <span style="color:red;"><?= isset($error["Firstname"]) ? $error["Firstname"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="birthDate">Date de naissance :</label>
                                <input type="text" name="birthDate" id="birthDate" class="form-control" placeholder="01/01/1995 ou 01-01-1995 ou 01.01.1995" value="<?= isset($securedBirthDate) ? $securedBirthDate : "" ?>">
                                <span style="color:red;"><?= isset($error["BirthDate"]) ? $error["BirthDate"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="birthCountry">Pays de naissance :</label>
                                <input type="text" name="birthCountry" id="birthCountry" class="form-control" placeholder="Votre pays de naissance" value="<?= isset($securedBirthCountry) ? $securedBirthCountry : "" ?>">
                                <span style="color:red;"><?= isset($error["BirthCountry"]) ? $error["BirthCountry"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="nationality">Nationalité :</label>
                                <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Votre nationalité" value="<?= isset($securedNationality) ? $securedNationality : "" ?>">
                                <span style="color:red;"><?= isset($error["Nationality"]) ? $error["Nationality"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="address">Adresse :</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Votre adresse" value="<?= isset($securedAddress) ? $securedAddress : "" ?>">
                                <span style="color:red;"><?= isset($error["Adress"]) ? $error["Adress"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="email">Adresse email :</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com" value="<?= isset($securedEmail) ? $securedEmail : "" ?>">
                                <span style="color:red;"><?= isset($error["Mail"]) ? $error["Mail"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="phoneNumber">Numéro de téléphone :</label>
                                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="0... ou +33..." value="<?= isset($securedPhoneNumber) ? $securedPhoneNumber : "" ?>">
                                <span style="color:red;"><?= isset($error["PhoneNumber"]) ? $error["PhoneNumber"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="adress">Diplôme :</label>
                                <select name="diploma">
                                    <option value="Veuillez choisir" <?= isset($_POST["diploma"]) && ($_POST["diploma"] == "Veuillez choisir") ? "selected" : "" ?>>Veuillez choisir</option>
                                    <option value="Aucun" <?= isset($_POST["diploma"]) && ($_POST["diploma"] == "Aucun") ? "selected" : "" ?>>Aucun</option>
                                    <option value="BAC" <?= isset($_POST["diploma"]) && ($_POST["diploma"] == "BAC") ? "selected" : "" ?>>BAC</option>
                                    <option value="BAC + 2" <?= isset($_POST["diploma"]) && ($_POST["diploma"] == "BAC + 2") ? "selected" : "" ?>>BAC + 2</option>
                                    <option value="BAC + 3 ou supérieur" <?= isset($_POST["diploma"]) && ($_POST["diploma"] == "BAC + 3 ou supérieur") ? "selected" : "" ?>>BAC + 3 ou supérieur</option>
                                </select>
                                <span style="color:red;"><?= isset($error["Diploma"]) ? $error["Diploma"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="poleemploiNumber">Numéro Pôle emploi :</label>
                                <input type="text" name="poleemploiNumber" id="poleemploiNumber" class="form-control" placeholder="Votre numéro d'identifiant Pôle emploi" value="<?= isset($securedPoleEmploiNumber) ? $securedPoleEmploiNumber : "" ?>">
                                <span style="color:red;"><?= isset($error["PoleEmploiNumber"]) ? $error["PoleEmploiNumber"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="badge">Nombre de badge :</label>
                                <input type="text" name="badge" id="badge" class="form-control" placeholder="Votre nombre de badge" value="<?= isset($securedBadge) ? $securedBadge : "" ?>">
                                <span style="color:red;"><?= isset($error["Badge"]) ? $error["Badge"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="codecademyLink">Lien codecademy</label>
                                <input type="url" name="codecademyLink" id="codecademyLink" class="form-control" placeholder="Votre lien codecademy" value="<?= isset($securedCodecademyLink) ? $securedCodecademyLink : "" ?>">
                                <span style="color:red;"><?= isset($error["CodecademyLink"]) ? $error["CodecademyLink"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="heroTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                                <textarea id="heroTextarea" name="heroTextarea" rows="5" placeholder="blablabla..."><?= isset($securedHeroTextarea) ? $securedHeroTextarea : "" ?></textarea>
                                <span style="color:red;"><?= isset($error["HeroTextarea"]) ? $error["HeroTextarea"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="hackTextarea">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                                <textarea id="hackTextarea" name="hackTextarea" rows="5" placeholder="blablabla..."><?= isset($securedHackTextarea) ? $securedHackTextarea : "" ?></textarea>
                                <span style="color:red;"><?= isset($error["HackTextarea"]) ? $error["HackTextarea"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                                <div>
                                    <input type="radio" id="yes" name="expYesNo" value="Oui" <?= isset($_POST["expYesNo"]) && ($_POST["expYesNo"] == "Oui") ? "checked" : "" ?>>
                                    <label for="yes">Oui</label>
                                </div>
                                <div>
                                    <input type="radio" id="no" name="expYesNo" value="Non" <?= isset($_POST["expYesNo"]) && ($_POST["expYesNo"] == "Non") ? "checked" : "" ?>>
                                    <label for="no">Non</label>
                                </div>
                                <span style="color:red;"><?= isset($error["ExpYesNo"]) ? $error["ExpYesNo"] : "" ?></span>
                            </div>

                            <div class="mt-4 mb-5 d-flex justify-content-between">
                                <input type="submit" class="btn btn-info btn-md" value="Valider le formulaire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <?php
        }
        ?>

    <?php
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>