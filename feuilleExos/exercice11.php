<?php

function plusPetit($nombre1,$nombre2){

    if ($nombre1<$nombre2) {

        return $nombre1 ; 
        
    }else if($nombre2<$nombre1){

        return $nombre2 ; 

    }

}

echo plusPetit(513,8) ;

?>