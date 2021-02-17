<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exo 4</title>
</head>
<body>

<p>
Créer un tableau **months** et l'initialiser avec les valeurs suivantes :<br>
- **janvier**<br>
- **février**<br>
- **mars**<br>
- **avril**<br>
- **mai**<br>
- **juin**<br>
- **juillet**<br>
- **aout**<br>
- **septembre**<br>
- **octobre**<br>
- **novembre**<br>
- **décembre**<br>

Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.

</p>

<?php
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
echo $months[7] . "<br>";
// echo str_replace("u", "û", $months[7]);
$months[7] = "août";
echo $months[7];
?>


</body>
</html>