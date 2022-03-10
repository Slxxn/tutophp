<?php

    $nombre = 0 ;

    if(isset($_GET["nombre"])){

        if($_GET["nombre"] != ""){

            $nombre = $_GET["nombre"] ;
        }
    }

    for ($i=0; $i < 10 ; $i++) { 

        $calcul = $nombre * $i ;
        echo $nombre." x ".$i." = ".$calcul ;
        echo "<br>" ;                        
    
    }

 /*   while ($a <= 10) {

        $calcul = $nombre * $a ;
        echo $nombre." x ".$a." = ".$calcul ;
        echo "<br>" ;  
        
        $a++ ;

    }
*/
?>