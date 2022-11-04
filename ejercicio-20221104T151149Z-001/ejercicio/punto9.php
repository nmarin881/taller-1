<?php
    $n= $_GET["nombre"];
    $a = $_GET["asignatura"];
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $n3= $_GET["nota3"];

    $n11 = $n1 * 0.3;
    $n22 = $n2 * 0.3;
    $n33 = $n3 * 0.4;

    $suma = $n11 + $n22 + $n33;

    if($suma>=4){
        echo "Aprobado";
    }
    if($suma<4){
        echo "Desaprobado";
    }

    echo " Nota final = " .$suma;

?>