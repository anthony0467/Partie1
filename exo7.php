<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<h2>Résultat</h2>

<?php
$age= 10;

if($age >= 6 && $age <= 7){
    echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
}elseif($age >= 8 && $age <= 9){
    echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
}elseif($age >= 10 && $age <= 11){
    echo "L'enfant qui a $age ans appartient à la catégorie « Minime »";
}elseif($age >= 12){
    echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
}else{
    echo "Pas de catégorie à $age ans.";
}


 ?>