<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - Exo 3</title>
</head>
<body>

<p>
Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :<br>
- Homme<br>
- Femme<br>

En fonction de l'âge et du genre afficher la phrase correspondante :<br>
- **Vous êtes un homme et vous êtes majeur**<br>
- **Vous êtes un homme et vous êtes mineur**<br>
- **Vous êtes une femme et vous êtes majeur**<br>
- **Vous êtes une femme et vous êtes mineur**<br>  

Gérer tous les cas.
</p>


<?php
$age = 6;
$gender = "femme";

if ($age >= 18 && $gender == "homme") {
    echo "Vous êtes un homme et vous êtes majeur.";
} else if ($age >= 18 && $gender == "femme") {
    echo "Vous êtes une femme et vous êtes majeur.";
} else if ($age <= 18 && $gender == "femme") {
    echo "Vous êtes une femme et vous êtes mineur.";
} else if ($age <= 18 && $gender == "homme") {
    echo "Vous êtes un homme et vous êtes mineur.";
} else {
    echo "erreur";
}
?>
</body>
</html>