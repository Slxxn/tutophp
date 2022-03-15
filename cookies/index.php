<?php

    // product array

    $products = [
        ["nom" => "Pain" , "prix" => 1],
        ["nom" => "Sucre" , "prix" => 2.5],
        ["nom" => "Pile" , "prix" => 10],
        ["nom" => "Eau" , "prix" => 20],
    ]   ;


  //  var_dump($products) ;

    foreach ($products as $product) {
        $linkAdd ="addToCard.php?nom=".$product["nom"]."&prix=".$product["prix"] ;
        
        ?>
            <?=$product["nom"] ; ?>
            <?=$product["prix"] ; ?>
            <a href="<?=$linkAdd;?>">Add</a>
            </br>
        <?php
    }
?>

<br>
Mon pannier :
<br>

<?php

    if(!empty($_COOKIE['card'])){

        $total = 0 ;
        $myCard = unserialize($_COOKIE['card']) ;

        foreach ($myCard as $item) {
            $total = $total + $item["prix"] ;
            ?>
                <?=$item["nom"]?>
                <?=$item["prix"]?><br>
            <?php
        }
        echo "Total : $total" ;
    }else{

        echo "Votre panier est vide !" ;


    }