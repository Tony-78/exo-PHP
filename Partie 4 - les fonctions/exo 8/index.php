<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exo 8</title>
</head>
<body>

<p>
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br>  
Tous les paramètres doivent avoir une valeur par défaut.
</p>


<?php

function addition($firstNumber = 5, $secondNumber = 10, $thirdNumber = 20) {
    return $firstNumber + $secondNumber + $thirdNumber;
}

echo addition();

?>

</body>
</html>
