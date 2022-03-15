<?php

session_start() ;

if(!empty($_SESSION["user"])){

    echo 'bonjour '.$_SESSION['user'] ;

}else {
    ?>

    <form action="save.php" method="post">
    <input type="text" name="nom" >
    <input type="submit" value="Envoyez">
    </form>

    <?php

}
                                                                                                                                           
?>