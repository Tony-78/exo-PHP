<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exo 4</title>
</head>
<body>

<p>
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième<br>
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième<br>
- **Les deux nombres sont identiques** si les deux nombres sont égaux

</p>


<?php

function returnString($firstNumber, $secondNumber) {
    if ($firstNumber > $secondNumber) {
        return "Le premier nombre est plus grand.";
    } else if ($firstNumber < $secondNumber) {
        return "Le premier nombre est plus petit.";
    } else {
        return "Les deux nombres sont identiques.";
    }
}

echo returnString(8,8);

?>


</body>
</html>