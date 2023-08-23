<!DOCTYPE html>
<html>
<body>
<h1>Modificar Tiquete</h1>

<?php
session_start();

if (isset($_SESSION['tiquetes_comprados'])) {
    $tiquetesComprados = $_SESSION['tiquetes_comprados'];

    if (isset($_GET['indice'])) {
        $indice = $_GET['indice'];

        if (isset($tiquetesComprados[$indice])) {
            $tiqueteAModificar = $tiquetesComprados[$indice];

            
            echo "<p>Origen: {$tiqueteAModificar['origen']}</p>";
            echo "<p>Destino: {$tiqueteAModificar['destino']}</p>";
            echo "<p>Fecha: {$tiqueteAModificar['fecha']}</p>";

            echo "<form method='post' action='procesar_modificacion.php'>";
            echo "<input type='hidden' name='indice' value='{$indice}'>";
            echo "<input type='text' name='nuevo_origen' placeholder='Nuevo Origen'>";
            echo "<input type='text' name='nuevo_destino' placeholder='Nuevo Destino'>";
            echo "<input type='date' name='nueva_fecha'>";
            echo "<input type='submit' name='modificar' value='Modificar'>";
            echo "</form>";
        } else {
            echo "Índice de tiquete no válido.";
        }
    } else {
        echo "No se proporcionó un índice de tiquete para modificar.";
    }
} else {
    echo "No hay tiquetes comprados.";
}
?>
</body>
</html>
