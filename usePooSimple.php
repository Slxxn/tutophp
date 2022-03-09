<?php

    include("pooSimple.php") ;

    $simpleTest = new Simple() ;

    // echo $simpleTest->nomPrive ; impossible 
    echo $simpleTest->nomPublique ;
    
    $simpleTest->nomPublique = "Gulliana" ;
    echo $simpleTest->nomPublique . <br>;

    // echo $simpleTest->nomPrive ; impossible
    echo $simpleTest->getNomPrive()."<br>" ;
    $simpleTest->setNomPublique("Gulliana") ;
    echo $simpleTest->getNomPrive() ."<br>"

    

?>