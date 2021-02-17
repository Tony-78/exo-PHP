<?php
$firstNumber = 100;
$secondNumber = 50;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exo 3</title>
</head>
<body>

<p>
Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.<br>  
**Tant que** la première variable n'est pas inférieure ou égale à 10 :<br>
- multiplier la première variable avec la deuxième<br>
- afficher le résultat<br>
- décrémenter la première variable<br>
</p>


<?php
while ($firstNumber >= 10) {
    $result = $firstNumber * $secondNumber;
    echo $result . "<br>";
    $firstNumber--;
}
?>


</body>
</html>