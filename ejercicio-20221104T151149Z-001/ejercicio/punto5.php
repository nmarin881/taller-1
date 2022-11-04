<?php
    $h1 = $_GET["h1"];
    $h2 = $_GET["h2"];

    if($h1>$h2){
        echo $h1. "Es mayor: " ;
    }
        else{
            echo $h2. " Es mayor: ";
        }
    
    echo "<br>";
    echo "<br>";

    $resta = $h1 - $h2;
    echo "Diferencia= " .$resta;
?>