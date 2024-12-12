<?php
//Servidor
$server = "localhost:33065";
//Usuario
$user = "root";
//Contraseña
$pass = "";
//Nombre de la base de datos
$db = "sistemas";
//Conexion de la base de datos
$conexion = new mysqli ($server,$user,$pass,$db);

if($conexion->connect_errno) {
    //Si no pues la conexion es fallida.
    die("conexion fallida" . $conexion->connect_errno);

}
?>