<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exo 8</title>
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
- **août**<br>
- **septembre**<br>
- **octobre**<br>
- **novembre**<br>
- **décembre**<br>

Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
</p>

<?php
$monthsArray = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

for ($numero = 0; $numero < 12; $numero++) {
    echo $monthsArray[$numero] . "<br>";
}

echo "<br>";


// la boucle foreach est spécialisée dans les tableaux
foreach ($monthsArray as $month) {
    echo $month . "<br>";
}


?>


</body>
</html>