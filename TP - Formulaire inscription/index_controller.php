<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexCountryNationality = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexMail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/";
$regexBirthDate = "/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.]((?|19|20)\d\d)$/";
$regexPhoneNumber = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
$regexPoleEmploi = "/^([0-9]{7}+[A-Z]{1})$/";
$regexBadgeNumber = "/^([0-9]{1,3})$/";

// Sécurisation des données, regex pour verifier prénom et nom
// preg_match : permet de rechercher des motifs bien précis au sein d’une chaîne de caractères
// htmlspecialchars : Convertit les caractères spéciaux en entités HTML

$error = [];


if (!empty($_POST)) {

    if (isset($_POST["lastname"])) {
        if (preg_match($regexName, $_POST["lastname"])) {
            $securedLastname = htmlspecialchars($_POST["lastname"]);
        } else {
            $error["Lastname"] = "<i>Erreur, veuillez entrer votre nom</i>";
        }

        if (empty($_POST["lastname"])) {
            $error["Lastname"] = "<i>Veuillez renseigner le champ</i>";
        }
    }


    if (isset($_POST["firstname"])) {
        if (preg_match($regexName, $_POST["firstname"])) {
            $securedFirstname = htmlspecialchars($_POST["firstname"]);
        } else {
            $error["Firstname"] = "<i>Erreur, veuillez entrer votre prénom</i>";
        }

        if (empty($_POST["firstname"])) {
            $error["Firstname"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["birthDate"])) {
        if (preg_match($regexBirthDate, $_POST["birthDate"])) {
            $securedBirthDate = htmlspecialchars($_POST["birthDate"]);
        } else {
            $error["BirthDate"] = "<i>Erreur, veuillez entrer votre date de naissance (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["birthDate"])) {
            $error["BirthDate"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["birthCountry"])) {
        if (preg_match($regexCountryNationality, $_POST["birthCountry"])) {
            $securedBirthCountry = htmlspecialchars($_POST["birthCountry"]);
        } else {
            $error["BirthCountry"] = "<i>Erreur, veuillez entrer votre pays de naissance</i>";
        }

        if (empty($_POST["birthCountry"])) {
            $error["BirthCountry"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["nationality"])) {
        if (preg_match($regexCountryNationality, $_POST["nationality"])) {
            $securedNationality = htmlspecialchars($_POST["nationality"]);
        } else {
            $error["Nationality"] = "<i>Erreur, veuillez entrer votre nationalité</i>";
        }

        if (empty($_POST["nationality"])) {
            $error["Nationality"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["address"])) {
        $securedAddress = htmlspecialchars($_POST["address"]);

        if (empty($_POST["address"])) {
            $error["Adress"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $securedEmail = htmlspecialchars($_POST["email"]);
        } else {
            $error["Mail"] = "<i>Erreur, veuillez entrer votre email (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["email"])) {
            $error["Mail"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["phoneNumber"])) {
        if (preg_match($regexPhoneNumber, $_POST["phoneNumber"])) {
            $securedPhoneNumber = htmlspecialchars($_POST["phoneNumber"]);
        } else {
            $error["PhoneNumber"] = "<i>Erreur, veuillez entrer votre numéro de téléphone (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["phoneNumber"])) {
            $error["PhoneNumber"] = "<i>Veuillez renseigner le champ</i>";
        }
    }
 
    if (isset($_POST["diploma"])) {
        if ((($_POST["diploma"]) == "Aucun") || ($_POST["diploma"] == "BAC") || ($_POST["diploma"] == "BAC + 2") || ($_POST["diploma"] == "BAC + 3 ou supérieur")) {
            $securedDiploma = htmlspecialchars($_POST["diploma"]);
        } else {
            $error["Diploma"] = "<i>Erreur, veuillez sélectionner votre niveau d'études</i>";
        }

        if ($_POST["diploma"] == "Veuillez choisir") {
            $error["Diploma"] = "<i>Veuillez faire un choix</i>";
        }
    }

    if (isset($_POST["poleemploiNumber"])) {
        if (preg_match($regexPoleEmploi, $_POST["poleemploiNumber"])) {
            $securedPoleEmploiNumber = htmlspecialchars($_POST["poleemploiNumber"]);
        } else {
            $error["PoleEmploiNumber"] = "<i>Erreur, veuillez entrer votre identifiant (7 chiffres + 1 lettre)</i>";
        }

        if (empty($_POST["poleemploiNumber"])) {
            $error["PoleEmploiNumber"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["badge"])) {
        if (preg_match($regexBadgeNumber, $_POST["badge"])) {
            $securedBadge = htmlspecialchars($_POST["badge"]);
        } else {
            $error["Badge"] = "<i>Erreur, veuillez renseigner votre nombre de badges</i>";
        }

        if (empty($_POST["badge"])) {
            $error["Badge"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["codecademyLink"])) {
        if (filter_var($_POST["codecademyLink"], FILTER_VALIDATE_URL)) {
            $securedCodecademyLink = htmlspecialchars($_POST["codecademyLink"]);
        } else {
            $error["CodecademyLink"] = "<i>Erreur, veuillez entrer une url</i>";
        }

        if (empty($_POST["codecademyLink"])) {
            $error["CodecademyLink"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["heroTextarea"])) {
        $securedHeroTextarea = htmlspecialchars($_POST["heroTextarea"]);

        if (empty($_POST["heroTextarea"])) {
            $error["HeroTextarea"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["hackTextarea"])) {
        $securedHackTextarea = htmlspecialchars($_POST["hackTextarea"]);

        if (empty($_POST["hackTextarea"])) {
            $error["HackTextarea"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    
    if (isset($_POST["expYesNo"])) {
        if (($_POST["expYesNo"] == "Oui") || ($_POST["expYesNo"] == "Non")) {
            $securedExpQuestion = htmlspecialchars($_POST["expYesNo"]);
        } else {
            $error["ExpYesNo"] = "<i>Erreur, veuillez cocher \"Oui\" ou \"Non\"</i>";
        }
    } else {
        $error["ExpYesNo"] = "Veuillez faire un choix";
    }

}

?>