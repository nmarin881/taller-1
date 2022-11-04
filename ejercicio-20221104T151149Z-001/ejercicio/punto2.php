<?php
    $n= $_GET["nombre"];
    $a = $_GET["asignatura"];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3= $_GET["nota3"];


    $n = $n1 + $n2 + $n3/3;
    echo"Nota final = " .$n;
?>