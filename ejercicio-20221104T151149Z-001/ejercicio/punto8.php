<?php
    $u= $_GET["edad"];
    $s = $_GET["sexo"];
    
    if($s=="M" or$s=="MASCULINO" or $s=="masculino" ){
        if($u>=63){
            echo"Se puede jubilar";
        }else{
            echo "No se puede jubilar";
        }
    }elseif($s == "F" or $s == "FEMENINO" or $s == "f" ){
        if($u>54){
            echo"Se puede jubilar";
        }else {
            echo "No se puede jubilar";
        }
    }
    
    


    
?>