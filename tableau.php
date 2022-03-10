<?php

$monTableauSimple = ["Jerome","Yannis","Nicolas"] ;
   //echo $monTableauSimple[2] ;

// print all item in my array

  /*  
  
    for($i=0; $i < count($monTableauSimple); $i++){

        echo $monTableauSimple[$i] ; 
        echo "</br>" ;
    }

// print in revrse all item in my array

    for($i=count($monTableauSimple)-1; $i < count($monTableauSimple); $i--){

            echo $monTableauSimple[$i] ; 
            echo "</br>" ;
    }
    
    */
        

    foreach($monTableauSimple as $index => $row){

        echo  $index." - ".$row ;
        echo "</br>" ;

    }

    echo "</br>" ;



    $monTableauMulti = [   ["nom" => "ZAMANT" ,"prénom" => "Jérome"] ,
                            ["nom" => "DUBOIS" ,"prénom" => "Yannis"] ,
                            ["nom" => "EMMANUEL" ,"prénom" => "Nicolas"]
                        ] ; 

    foreach($monTableauMulti as $rowMulti){

        foreach($rowMulti as $key => $row){
            echo  $key." - ".$row ;
         echo "</br>" ;
    
    
        }

    }

    

?>