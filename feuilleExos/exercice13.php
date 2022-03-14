<?php

    function premierElementTableau(){

        $tableau = ["Jérome",
                    "Yannis",
                    "Nicolas"] ;

        for($i=0; $i < count($tableau); $i++){

            if ($tableau=="") {
               
                return "false" ;

            }else{

                return $tableau[0] ;

            }
        }       
    }

    echo premierElementTableau()

?>