<?php

$card = [] ;
    // test get  Val

    if(isset($_GET["nom"]) && isset($_GET["prix"])){

        $item=[            
            "nom"=>$_GET["nom"],
            "prix"=>$_GET["prix"]   
        ];

        //lecture de mon cookie card
        if(!empty($_COOKIE["card"])){
            $card = unserialize($_COOKIE["card"]) ;

        }
        array_push($card , $item) ;



        $arrayToSerialize = serialize($card) ;
        setcookie("card" ,
                 $arrayToSerialize , 
                 time()+3600*24) ;

        echo "votre produit a été ajouteé"."</br>" ;          
    }

?>
<a href="index.php">Retour</a>