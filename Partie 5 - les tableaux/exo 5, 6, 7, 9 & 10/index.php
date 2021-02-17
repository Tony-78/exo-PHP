<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exo 5,6,7,9 & 10</title>
</head>
<body>

<p>
exercice 5 : Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.<br><br>
exercice 6 : afficher la valeur de l'index 59.<br><br>
exercice 7 : ajouter la ligne correspondant au département de la ville de Reims.<br><br>
exercice 9 :Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.<br><br>
exercice 10 :Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.<br>
Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**

<!-- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux -->
</p>

<?php
// exercice 5
$france = [
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme"
];

// exercice 6
echo $france[59];
echo "<br>";

// exercice 7
$france[51]="Reims";
echo $france[51];
echo "<br><br>";

// exercice 9 , "as" signifie "en tant que"
// foreach  va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element).
foreach ($france as $element) {
    echo $element . "<br>";
}
echo "<br><br>";

// exercice 10
foreach ($france as $cle => $element) {
    echo "Le département " . $element . " a le numéro " . $cle . ".<br>";
}
?>

</body>
</html>