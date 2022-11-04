<?php
    $v = $_GET["volante"];
    $p = $_GET["posters"];
    $t = $_GET["Tarjetas"];

$v1 = $v * 2000;
$p1 = $p * 5000;
$t1 = $t * 500;

echo "Volante =" .$v1;
echo "<br>";
echo "<br>";
echo "Posters =" .$p1;
echo "<br>";
echo "<br>";
echo "Tarjetas =" .$t1;
echo "<br>";
echo "<br>";
$pago = $v1 + $p1 +$t1; 

    echo "Pago total= " .$pago;
?>