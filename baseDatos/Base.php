<?php
function OpenDB()
{
    $enlace = mysqli_connect("3307", "root", "viajes", "Jmontero123.");

    if (!$enlace) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    return $enlace;
}

function CloseDB($enlace)
{
    mysqli_close($enlace);
}
?>
