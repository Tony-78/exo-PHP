<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exo 6</title>
</head>
<body>

<p>
Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**.<br>
Elle doit renvoyer une chaine de la forme :<br>  
"Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".
</p>


<?php

function sentence($surname, $firstname, $age) {
    return "Bonjour " . $surname . " " . $firstname . ", tu as " . $age . " ans.";
}

echo sentence("Prou","Tony",25);

?>


</body>
</html>