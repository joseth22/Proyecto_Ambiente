<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "Proyecto";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Conexión fallida!";
}
else{
    echo "Conexión exitosa";
}
