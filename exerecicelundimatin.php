<?php

function factorielle($nombre){

    $fac = 1 ;

    for ($i=1; $i <= $nombre ; $i++) { 

        $fac= $fac*$i ;
       
    }

    return $fac ;
}

echo factorielle(3) ;


?>