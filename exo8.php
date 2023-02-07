<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>

<h2>Résultat</h2>

<?php
$multiple = 8;
echo "Table de  $multiple :<br>";

for ($i = 1; $i <= 10; $i++){
    $total = $i * $multiple;
    echo "$i * $multiple : $total <br>";
}

echo "2em méthode: <br>";
$j = 1;
while($j <= 10){
$total = $j * $multiple;
echo "$j * $multiple : $total <br>";
$j++;
}

 ?>