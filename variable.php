<?php

include("poo.php") ;

$majeur = new Majeur() ;

$prenom = "Guiliano" ;
$nom = strtoupper("Gustave") ;
$age = 21 ;
$affAge = true ;

//affiche la sortie


 
    echo $majeur->majeurOrNot($nom,$prenom,$age);
?>