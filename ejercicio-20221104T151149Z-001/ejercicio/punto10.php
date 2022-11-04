<?php
    $precio =$_GET['precio'];
    if($precio>20000){
        $s= $precio-($precio*0.20);
        echo"Valor de compra: ".$precio;
        echo"<br>";
        echo"<br>";
        echo"Descuento del 20% ";
        echo "<br>";
        echo "<br>";
        echo "valor final: ".$s;
    }else{$precio<20000; 

        echo"El valor de compra es:".$precio;
        echo"<br>";
        echo"<br>";

        echo"No hay descuento";


    }