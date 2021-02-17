<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exo 7</title>
</head>
<body>

<p>
Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.<br>  
**Attention** age est de type entier.<br>  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".
</p>


<?php
$lastname = "Prou";
$firstname = "Tony";
$age = 25;
echo "Bonjour " . $firstname . " " . $lastname . ", tu as " . $age . " ans.";
?>


</body>
</html>