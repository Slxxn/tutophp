<?php

//ET = &&

    $vraiEtFaux = true && false ;
    var_dump($vraiEtFaux) ;

    $vraiEtVrai = true && true ;
    var_dump($vraiEtVrai) ;

     $fauxEtFaux = false && false ;
    var_dump($fauxEtFaux) ;


// OU = ||

    $vraiEtFaux = true || false ;
    var_dump($vraiEtFaux) ;    

    $vraiEtVrai = true || true ;
    var_dump($vraiEtVrai) ;

     $fauxEtFaux = false || false ;
    var_dump($fauxEtFaux) ;

// ==

    $age = 12 ; 

    if($age == 12){
    echo "$age = 12" ;
    }

    echo "<br>" ;
    echo "<br>" ;

// != , <>

    if($age != 30){
        echo "$age est différent de 30" ;
        }

        echo "<br>" ;
        echo "<br>" ;

// <,

    if($age < 30){
            echo "$age < 30" ;
            }   
            
        echo "<br>" ;
        echo "<br>" ;

    if(($age >10) && ($age<30)){
        echo "10<$age<30" ;
        }

        echo "<br>" ;
        echo "<br>" ;
    if (($age >10) || ($age<5)) {
        # code...
    } else {
        # code...
    }

    

?>