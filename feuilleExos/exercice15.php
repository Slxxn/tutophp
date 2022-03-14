<?php

$tableau = [200,82,105] ;

    function plusGrand($tableau){

        $x = 0 ; 

        foreach ($tableau as $nombre) {

            if ($nombre>$x){

                $x=$nombre ;
        
            }
        }

        return $x ;

    }   
   
    echo plusGrand($tableau)

?>