<?php
// La estructura de control if permite la ejecución condicional de fragmentos de código. 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_if'])) {
        $edad = $_POST['edad'];
//Las sentencias if se pueden incluir unas dentro de otras indefinidamente.
    if ($edad >= 18){
        echo 'Es mayor de edad';
    }
    }

?>