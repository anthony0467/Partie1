<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$prixfranc = 100;
$coefeuro = 6.55957;


echo "montant en francs : $prixfranc<br>";
echo " $prixfranc francs = ";
echo (round($prixfranc / $coefeuro, 2));
 ?>