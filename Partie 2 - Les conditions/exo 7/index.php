<?php
$isOk = false;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - Exo 7</title>
</head>
<body>

<p>
Traduire ce code avec des if et des else :<br>  

<!-- <?php
  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?> -->
</p>


<?php
if ($isOk == false) {
    echo "c'est pas bon !!!";
} else {
    echo "c'est ok !!";
}
?>


</body>
</html>