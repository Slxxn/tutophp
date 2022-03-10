<?php

    include("pooCalculer.php") ;

    $monOpération = new Calculer() ;
    $monOpération->nombre = 5 ;
    $monOpération->operande = 5 ;
    
    $monOpération->resultat() ;
    
?>