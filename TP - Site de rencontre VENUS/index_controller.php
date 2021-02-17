<?php

$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexPostalCode = "/^([0-9]{5})$/";
$regexAge = "/^(1[89]|[2-9][0-9])$/";



$error = [];

if (empty($_COOKIE)) {

    if (!empty($_POST)) {

        if (isset($_POST["lastname"])) {
            if (preg_match($regexName, $_POST["lastname"])) {
                $securedLastname = htmlspecialchars($_POST["lastname"]);
            } else {
                $error["Lastname"] = "<i>Erreur, veuillez entrer votre nom</i>";
            }

            if (empty($_POST["lastname"])) {
                $error["Lastname"] = "<i>Veuillez renseigner votre nom</i>";
            }
        }


        if (isset($_POST["firstname"])) {
            if (preg_match($regexName, $_POST["firstname"])) {
                $securedFirstname = htmlspecialchars($_POST["firstname"]);
            } else {
                $error["Firstname"] = "<i>Erreur, veuillez entrer votre prénom</i>";
            }

            if (empty($_POST["firstname"])) {
                $error["Firstname"] = "<i>Veuillez renseigner votre prénom</i>";
            }
        }
        
        if (isset($_POST["age"])) {
            if (!is_numeric($_POST["age"])) {
                $error["Age"] = "<i>Erreur, veuillez renseigner votre âge</i>";
            } else {
                if (preg_match($regexAge, $_POST["age"])) {
                    $securedAge = htmlspecialchars($_POST["age"]);
                } else if ($_POST["age"] < 18){
                    $error["Age"] = "<i>Le site est inaccessible pour les mineurs.</i>";
                } else {
                    $error["Age"] = "<i>Erreur, veuillez renseigner votre âge</i>";
                }
            }
            
            if (empty($_POST["age"])) {
                $error["Age"] = "<i>Veuillez renseigner votre âge</i>";
            }
        }


        if (isset($_POST["gender"])) {
            if ((($_POST["gender"]) == "Homme") || ($_POST["gender"] == "Femme")) {
                $securedGender = htmlspecialchars($_POST["gender"]);
            } else {
                $error["Gender"] = "<i>Erreur, veuillez faire un choix</i>";
            }

            if ($_POST["gender"] == "Veuillez choisir") {
                $error["Gender"] = "<i>Veuillez faire un choix</i>";
            }
        }

        if (isset($_POST["postalCode"])) {
            if (preg_match($regexPostalCode, $_POST["postalCode"])) {
                $securedPostalCode = htmlspecialchars($_POST["postalCode"]);
            } else {
                $error["PostalCode"] = "<i>Erreur, le code postal doit avoir 5 chiffres</i>";
            }

            if (empty($_POST["postalCode"])) {
                $error["PostalCode"] = "<i>Veuillez renseigner votre code postal</i>";
            }
        }


        if (isset($_POST["email"])) {
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $securedEmail = htmlspecialchars($_POST["email"]);
            } else {
                $error["Mail"] = "<i>Erreur, veuillez entrer votre email (voir la forme ci-dessus)</i>";
            }

            if (empty($_POST["email"])) {
                $error["Mail"] = "<i>Veuillez renseigner votre email</i>";
            }
        }

        if (isset($_POST["type"])) {
            if (($_POST["type"] == "Homme") || ($_POST["type"] == "Femme") || ($_POST["type"] == "Homme & Femme")) {
                $securedType = htmlspecialchars($_POST["type"]);
            } else {
                $error["Type"] = "<i>Erreur, veuillez cocher une case</i>";
            }
        } else {
            $error["Type"] = "Veuillez faire un choix";
        }



        if (count($error) == 0) {
            setcookie("lastname", $_POST["lastname"], time() + 24 * 3600, null, null, false, true);
            setcookie("firstname", $_POST["firstname"], time() + 24 * 3600, null, null, false, true);
            setcookie("age", $_POST["age"], time() + 24 * 3600, null, null, false, true);
            setcookie("gender", $_POST["gender"], time() + 24 * 3600, null, null, false, true);
            setcookie("postalCode", $_POST["postalCode"], time() + 24 * 3600, null, null, false, true);
            setcookie("email", $_POST["email"], time() + 24 * 3600, null, null, false, true);
            setcookie("type", $_POST["type"], time() + 24 * 3600, null, null, false, true);


            header("Location: lovers.php");
        }
    }
} else {
    header("Location: lovers.php");
}
