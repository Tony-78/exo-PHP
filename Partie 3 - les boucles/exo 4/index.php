<?php
$number = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exo 4</title>
</head>
<body>

<p>
Créer une variable et l'initialiser à 1.<br>
**Tant que** cette variable n'atteint pas 10, il faut :<br>
- l'afficher<br>
- l'incrementer de la moitié de sa valeur<br>
</p>


<?php
while ($number < 10) {
    echo $number . "<br>";
    $number += $number / 2;
}
?>


</body>
</html>