<!-- formulario_contacto.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Procesando Formulario</title>
</head>
<body>
    <?php
            // Por ejemplo, mostraremos los datos recibidos en el navegador:
            echo "<h2>Información recibida:</h2>";

    $nombre = $_POST['Nombre'];  
    $telefono = $_POST['Teléfono'];
    $mensaje = $_POST['mensaje'];

    //echo $nombre . " " . $telefono . " " . $mensaje;

    if (isset($_POST['Correo'])) {
        // Acceder a la clave "Correo"
        $correo = $_POST['Correo'];
        // Hacer algo con $correo
    } else {
        $correo = "lucia@gmail.com";
        // La clave "Correo" no existe en el arreglo
        // Manejar este caso apropiadamente
    }
    echo $nombre . "<br>" .  $correo . "<br>". $telefono . "<br>" . $mensaje;
    ?>
</body>
</html>

