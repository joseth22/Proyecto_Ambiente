<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include 'header-compra.php'; ?>
<body>
    <h1>Carrito</h1>
<?php
session_start();
$tiquetesComprados = isset($_SESSION['tiquetes_comprados']) ? $_SESSION['tiquetes_comprados'] : [];

// Agregar tiquetes por defecto si no hay tiquetes en el carrito
    if (empty($tiquetesComprados)) {
        $tiquetesComprados[] = array(
            'origen' => 'Cartago',
            'destino' => 'San Jose',
            'fecha' => '2023-08-01'
        );
    }

    echo "<ul>";
    foreach ($tiquetesComprados as $indice => $tiquete) {
        echo "<li>{$tiquete['origen']} - {$tiquete['destino']} - {$tiquete['fecha']} <a href='modificar_tiquete.php?indice={$indice}'>Modificar</a></li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
