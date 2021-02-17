<?php
$isOk = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - Exo 8</title>
</head>
<body>

<p>
Traduire ce code avec des if et des else :<br>  

<!-- <?php
  echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
?> -->
</p>


<?php
if ($isOk) {
    echo "c'est ok !!";
} else {
    echo "c'est pas bon !!!";
}
?>


</body>
</html>