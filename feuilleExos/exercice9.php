<?php

    function estIlMajeure($age){

        if ($age>17) {

            return "true" ; 
            
        }else if($age<18){

            return "false" ; 

        }

    }

    echo estIlMajeure(18) ;

?>