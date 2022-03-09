<?php

    class Majeur {

        //private $nomPrive = "petit nom"
        public $monPublic = "Gulliano"
    
        function majeurOrNot($nom,$prenom,$age){
        
            $affSortie = "Bonjour" ;
    
                if ($age > 20){
            
                     $affSortie = $affSortie . " "
                     . $nom . " " . $prenom
                     .", vous etes majeur" ;
            
                 }else {
            
                     $affSortie = $affSortie . " "
                     . $nom . " " . $prenom
                     .",  vous etes mineur" ;
                }
    
                return $affSortie ;
    


        
    
    
    
    
    }




?>