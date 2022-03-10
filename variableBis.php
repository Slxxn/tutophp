<?php

    $maVariableChaine = "Bonjour" ;
    $maVariableChaine = $maVariableChaine."le monde" ;
    $maVariableChaine.= " ! " ;


        echo $maVariableChaine."<br>" ;

    $monNombre1 = 17 ;
    $monNombre2 = 20 ;

    $somme = $monNombre1 + $monNombre2 ;

        echo "somme de ".$monNombre1." + ".$monNombre2." = ".$somme ;
        echo "</br>" ; 

    $mybolean = true ;
    var_dump($mybolean) ; 

    $monTableauSimple = ["Jérome",
                         "Yannis",
                         "Nicolas"] ;

        var_dump($monTableauSimple) ;

    $monTableauMulti = [   ["nom" => "ZAMANT" ,"prénom" => "Jérome"] ,
                            ["nom" => "DUBOIS" ,"prénom" => "Yannis"] ,
                            ["nom" => "EMMANUEL" ,"prénom" => "Nicolas"]
                        ] ; 

        var_dump($monTableauMulti) ;