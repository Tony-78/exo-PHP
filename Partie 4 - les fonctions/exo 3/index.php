<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exo 3</title>
</head>
<body>

<p>
Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.
</p>


<?php

function returnString($firstString, $secondString) {
    return $firstString . $secondString;
}

echo returnString("abc" , "def");

?>


</body>
</html>