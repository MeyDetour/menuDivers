<?php
require_once 'logique/logique.php';

foreach ($bDDpizzas as $pizza){
    if ($pizza['id']==$_GET['pizzaID'] ){
                $objetPIzza = $pizza;
    }

}


afficher("pizza/pizza",["pizza"=>$objetPIzza]);