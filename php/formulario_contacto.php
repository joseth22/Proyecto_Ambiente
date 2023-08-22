<!-- formulario_contacto.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Procesando Formulario</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["Nombre"];
        $correo = $_POST["Correo"]; // Cambio aquí
        $telefono = $_POST["Teléfono"];
        $mensaje = $_POST["mensaje"];

        // Puedes realizar aquí las acciones que necesites con los datos recibidos,
        // como enviar un correo electrónico, almacenarlos en una base de datos, etc.

        // Por ejemplo, mostraremos los datos recibidos en el navegador:
        echo "<h2>Información recibida:</h2>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Correo:</strong> " . $correo . "</p>";
        echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
        echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    } else {
        echo "<h2>Error: No se han recibido datos del formulario.</h2>";
    }
    ?>
</body>
</html>

