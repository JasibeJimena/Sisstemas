<?php
$i = 1;
//Esta estructura se utiliza para repetir una serie de instrucciones mientras la condición especificada sea verdadera.
while ($i <= 5) {
    echo $i . "<br>";
    // permite la ejecución condicional de fragmentos de código. Las sentencias if se pueden incluir unas dentro de otras indefinidamente.
    if ($i == 3) {
        //finaliza la ejecución de la estructura for , foreach , while , do-while o switch en curso. 
        break;
    }
    $i++;
}

?>