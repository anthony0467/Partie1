<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>Résultat</h2>

<?php

$arr = ['Mickael'=> 'FRA','Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];



function hello($tableau){
    
    foreach($tableau as $name => $value){
        if($value === 'FRA'){
            echo "Salut $name <br>";
        }else if($value === 'ESP'){
           echo "Hola $name <br>"; 
        }else{
            echo "Hello $name <br>";
        }
    }
}

hello($arr);
$arr2 = ksort($arr);
echo  "<br>";

hello($arr);
 
 ?>