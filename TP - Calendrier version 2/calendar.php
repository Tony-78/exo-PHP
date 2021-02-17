<?php

setlocale(LC_TIME, "fr_FR.UTF8");

$days = array(
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche",
);

$months = array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre",
);

if (isset($_GET["months"]) && isset($_GET["years"])) {
    // On va ici transformer nos mois de l'année en integer (1 à 12)
    // $month permet de ressortir l'index du tableau $months (allant de 0 à 11)
    // array_search (ce que l'on cherche, où ça ?) --> ressort la position d'un mois dans le tableau, attention à ne pas oublier le +1 , décalage de 1 jour dû à l'array
    // strtotime et cal_days_in_month utilisent 1 à 12 pour les mois, de ce fait on ajoute +1 (pour obtenir 1 à 12)
    $month = array_search($_GET["months"], $months) + 1;
    // on récupère l'année
    $year = $_GET["years"];
    // nombre de jours dans un mois
    $nbDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    // on cherche le 1er jour du mois, ...
    // strtotime --> Transforme un texte anglais en timestamp
    // strftime (format, timestamp) --> Formate une date/heure locale avec la configuration locale
    // $u : de 1 (pour Lundi) à 7 (pour Dimanche)
    $firstDayInMonth = strftime("%u", strtotime($month . "/01/" . $year));

    if ((($nbDays + $firstDayInMonth - 1) % 7) != 0) {
        $extraCases = 7 - (($nbDays + $firstDayInMonth - 1) % 7);
    } else {
        $extraCases = 0;
    }
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>TP partie 9 Les Formulaires</title>
</head>


<body>

    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1 class="text-center text-primary m-4"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

    <table class="table table-bordered">
        <thead class="title text-center text-white bg-dark">
            <tr>
                <?php
                foreach ($days as $day) {
                ?>
                    <th style="width: 100px;"><?= $day ?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
     
        <tbody class="text-center font-weight-bold">
            <tr>
                <?php
                for ($case = 1; $case <= ($nbDays + ($firstDayInMonth - 1 ) + $extraCases); $case++) {
                ?>
                    <!-- 1ère ternaire : premet de griser les cases avant et après le mois  
                            2 ème ternaire: afficher les cases-->
                    <td class="align-middle <?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $nbDays ? "" : "bg-secondary"?>" 
                    style="width: 100px; height: 80px"><?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $nbDays ? $case - $firstDayInMonth + 1 : "" ?></td>
                <?php
                    if ($case % 7 == 0) { 
                ?>
                    </tr>
                    <tr>
                <?php
                    }
                ?>
                <?php
                    }
                ?>
            </tr>
        </tbody>
        
    </table>

    <a href="index.php" class="btn btn-primary m-3">Retour</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>