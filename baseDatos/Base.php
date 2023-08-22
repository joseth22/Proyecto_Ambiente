<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'Jmontero123.';
$db = 'mydb';

$conexion = new mysqli($servidor, $usuario, $contrasena, $db);

if($conexion->connect_error){
    die($conexion->connect_error);
}
?>
