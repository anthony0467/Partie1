<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
$phrase = "Engage le jeu que je le gagne";
$phrase2 = str_replace(' ','', $phrase);
$phrasefinal = strtolower($phrase2);
$phraseRev = strrev($phrasefinal);



if($phrasefinal == $phraseRev){
    echo "la phrase $phrase est un palindrome";
}
else{
    echo "la phrase $phrase n'est un palindrome";
}

 ?>