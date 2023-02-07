<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php

class Personne
{
    
  
    function identite() {
        return "[$this->prenom,$this->nom,$this->datenaissance]";
      }

    }  


      $p = new Personne();
      $p->prenom = "DUPONT";
      $p->nom = "Michel";
      $p->datenaissance = date_create('1980-02-19');

      print "personne=" . $p->identite() . "\n";


 ?>