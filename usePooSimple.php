<?php

    include("pooSimple.php") ;

    $simpleTest = new Simple() ;

    // echo $simpleTest->nomPrive ; impossible 
    echo $simpleTest->nomPublique ;
    
    echo $simpleTest->nomPublique . "<br>" ;
    $simpleTest->nomPublique = "Gulliana" ;
    echo $simpleTest->nomPublique. "<br>" ;

    // echo $simpleTest->nomPrive ; impossible
    echo $simpleTest-> getNomPrive() ."<br>" ;
    $simpleTest->setNomPublique = "Gulliana" ;
    echo $simpleTest-> getNomPrive() ."<br>"

?>