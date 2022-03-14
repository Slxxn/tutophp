<?php

    function plusPetit($nombre1,$nombre2,$nombre3){

        if ($nombre1<$nombre2 && $nombre1<$nombre3) {

            return $nombre1 ; 
            
        }else if($nombre2<$nombre1 && $nombre2<$nombre3){

            return $nombre2 ; 

        }else if($nombre3<$nombre1 && $nombre3<$nombre2){

            return $nombre3 ;

        }

    }

    echo plusPetit(111,105,15) ;

?>