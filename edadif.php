<?php
    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];

// permite la ejecución condicional de fragmentos de código. Las sentencias if se 
//pueden incluir unas dentro de otras indefinidamente.
    if($edad >=18)
    {
        echo"$nombre Es mayor de edad";
//ELSE (valor falso) ENDIF: el resultado devuelto dependerá de si la condición se cumple o no.
    }else{
        echo"$nombre Es menor de edad";
    }


?>

