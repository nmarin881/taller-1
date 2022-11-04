<?php
    $p = $_GET["producto"];

    $ps = $p + ($p *0.15);
    echo "Valor producto: ".$p;
    echo "<br>";
    echo "<br>";
    echo "Ganancia del 15%";
    echo "<br>";
    echo "<br>";
    echo "valor final: ".$ps;

   
?>