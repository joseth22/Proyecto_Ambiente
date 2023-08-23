<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["modificar"])) {
    $indice = $_POST['indice'];
    $nuevoOrigen = $_POST['nuevo_origen'];
    $nuevoDestino = $_POST['nuevo_destino'];
    $nuevaFecha = $_POST['nueva_fecha'];

    
    $tiqueteAModificar = $tiquetesComprados[$indice];

    $tiqueteAModificar['origen'] = $nuevoOrigen;
    $tiqueteAModificar['destino'] = $nuevoDestino;
    $tiqueteAModificar['fecha'] = $nuevaFecha;

    // Actualiza el arreglo de tiquetes comprados
    $tiquetesComprados[$indice] = $tiqueteAModificar;

    // Actualiza la sesión con el nuevo arreglo de tiquetes comprados
    $_SESSION['tiquetes_comprados'] = $tiquetesComprados;

    header("Location: inicio.php");
    exit();
}
?>
