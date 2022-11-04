<?php
    $n= $_GET["nombre"];
    $a = $_GET["asignatura"];
    $c = $_GET["cfinal"];
    if($c>7){
        echo"Aprobado";
    }   else{
        echo"Desaprobado";
    }
    
    


    
?>