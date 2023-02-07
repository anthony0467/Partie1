<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php
$facture = 152;
$montant = 200;
$reste = $montant - $facture;
$billet10 = 10;
$billet5 = 5;
$pieces2 = 2;
$pieces1 = 1;

$calcul10 = intdiv($reste, $billet10) * $billet10;
$reste5 = $reste - $calcul10;
$calcul5= intdiv($reste5, $billet5) * $billet5;
$reste2 = $reste5 - $calcul5;
$calcul2= intdiv($reste2, $pieces2) * $pieces2;
$rest1 = $reste2 - $calcul2;
if(intdiv($reste, $billet10) > 0) {
    echo  intdiv($reste, $billet10);
    echo " billet de 10, ";
}

if(intdiv($reste5, $billet5) > 0){
    echo intdiv($reste5, $billet5);
    echo " billet de 5, ";
}

if(intdiv($reste2, $pieces2) > 0){
    echo intdiv($reste2, $pieces2);
    echo " pieces de 2, ";
}

if(intdiv( $rest1, $pieces1) > 0){
    echo intdiv( $rest1, $pieces1);
    echo " pieces de 1";
}



  
    
 ?>