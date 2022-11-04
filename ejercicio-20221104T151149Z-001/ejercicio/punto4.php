<?php
    $horas = $_GET["horas"];
    $valor = $_GET["valor"];

    $sueldo = $horas* $valor;
    echo"Sueldo = " .$sueldo;
?>