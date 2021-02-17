<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exo 7</title>
</head>
<body>

<p>
Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :<br>
- Homme<br>
- Femme<br>

La fonction doit renvoyer en fonction des paramètres :<br>
- **Vous êtes un homme et vous êtes majeur**<br>
- **Vous êtes un homme et vous êtes mineur**<br>
- **Vous êtes une femme et vous êtes majeur**<br>
- **Vous êtes une femme et vous êtes mineur**<br>

Gérer tous les cas.
</p>


<?php

function sentence($age, $gender) {
    if ($age >= 18 && $gender == "homme") {
        return "Vous êtes un homme et vous êtes majeur.";
    } else if ($age >= 18 && $gender == "femme") {
        return "Vous êtes une femme et vous êtes majeur.";
    } else if ($age <= 18 && $gender == "femme") {
        return "Vous êtes une femme et vous êtes mineur.";
    } else if ($age <= 18 && $gender == "homme") {
        return "Vous êtes un homme et vous êtes mineur.";
    } else {
        return "erreur";
    } 
} 

echo sentence(85,"femme");
?>


</body>
</html>