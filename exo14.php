<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
$datecourante = date_create('21-05-2018');
$datenaissance = date_create('17-01-1985');


$interval = date_diff($datecourante, $datenaissance);
echo 'Affichage(si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985: <br>';

echo 'Age de la personne: ';
echo $interval -> format(' %y ans %m mois %d jours');


 ?>
    
</body>
</html>
