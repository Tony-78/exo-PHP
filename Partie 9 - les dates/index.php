<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 9 - Exo 1</title>
</head>
<body>

<p><b>Exercice 1</b> : Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).</p>

<?php
date_default_timezone_set('Europe/Paris');
$dateOne = date("d/m/Y");
echo "<b>Nous sommes le $dateOne.</b><br><br>";
?>

<p><b>Exercice 2</b> : Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).</p>

<?php
$dateTwo = date("d-m-Y");
echo "<b>Nous sommes le $dateTwo.</b><br><br>";
?>


<p><b>Exercice 3</b> : Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)<br>
Bonus : Le faire en français.</p>

<?php
// Modifie les informations de localisation
setlocale(LC_TIME, "fr_FR.UTF8");
// strftime : Formate une date/heure locale avec la configuration locale
// %A : jour en lettres, %d : jour en chiffres, %B : mois en lettres,  %G : année
$dateThree = strftime("%A %d %B %Y");
echo "<b>Nous sommes le $dateThree.</b><br><br>";
?>


<p><b>Exercice 4</b> : Afficher le timestamp du jour.<br>  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

<?php
//Le Timestamp UNIX représente le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée.
echo "<b>Timestamp actuel : " . time() .".</b><br>";
// mktime() retourne le timestamp UNIX d’une date
// mktime(heure, minute, seconde, mois, jour, année)
echo "<b>Timestamp du mardi 2 août 2016 15h00 :" . mktime(15, 0, 0, 8, 2, 2016) .".</b><br><br>";
?>


<p><b>Exercice 5</b> : Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.<p>

<?php
$timestampNow = time();
echo "<b>Timestamp actuel : $timestampNow.</b><br>";
//strtotime : donne le timestamp d'une date à partir d'une string (anglais)
// https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/date-timestamp-unix/
$timestampDate = strtotime("16-05-2016");
echo "<b>Timestamp du 16 mai 2016 : $timestampDate.</b><br>";

// cette variable va donner le nombre de jours entre aujourd'hui et le 16 mai 2016.
// intval : pour ne pas prendre après la virgule
// / 86400 pour connaître le nombre de jours (60sec * 60mins * 24h)
$timestampDiff = intval(($timestampNow - $timestampDate) / 86400);
echo "<b>Nombre de jours : $timestampDiff</b><br><br>";

// seconde solution
$origin = date_create(); // Date du jour
$target = date_create('2016-05-16');
$interval = date_diff($origin, $target);
echo "Nombre de jours entre maintenant et le 16 mai 2016 : " . $interval->days;
?>




<p><b>Exercice 6</b> : Afficher le nombre de jour dans le mois de février de l'année 2016.<p>

<?php
// cal_days_in_month affiche le nombre de jours dans un mois donné (type du calendrier (en général CAL_GREGORIAN), mois, année)
$monthDaysFeb2016 = cal_days_in_month(CAL_GREGORIAN, 02,2016);
echo "<b> Il y avait $monthDaysFeb2016 jours en février 2016.</b><br><br>";
?>


<p><b>Exercice 7</b> : Afficher la date du jour + 20 jours.<p>

<?php
echo date("d/m/Y", strtotime("+20 days"));
?>


<p><b>Exercice 8</b> : Afficher la date du jour - 22 jours.<p>

<?php
echo date("d/m/Y", strtotime("-22 days"));
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>