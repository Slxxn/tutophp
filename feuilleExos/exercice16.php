<?php

$tableau = [36,82,22] ;

    function plusPetit($tableau){

        $x = $tableau[0] ; 

        foreach ($tableau as $nombre){

            if ($x>$nombre){

                $x=$nombre ;
                
            }
        }

        return $x ;

    }   
   
    echo plusPetit($tableau)

?>