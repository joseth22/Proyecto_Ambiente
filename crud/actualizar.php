<?php
$localhost = "3306";
$username = "root";
$password = "Jmontero123.";
$dbname = "viajes";

$conn = mysqli_connect($localhost, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo electrónico"];
    $telefono = $_POST["Teléfono"];
    $mensaje = $_POST["mensaje"];

    $sql = "UPDATE tabla SET nombre='$nombre', correo='$correo', telefono='$telefono', mensaje='$mensaje' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
} elseif (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM tabla WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<form method="post" action="">
    <input type="text" name="Nombre" value="<?php echo $row["nombre"]; ?>"><br>
    <input type="text" name="Correo electrónico" value="<?php echo $row["correo"]; ?>"><br>
    <input type="text" name="Teléfono" value="<?php echo $row["telefono"]; ?>"><br>
    <textarea name="mensaje"><?php echo $row["mensaje"]; ?></textarea><br>
    <input type="submit" value="Actualizar">
</form>

<?php
} else {
    echo "ID no proporcionado para actualizar.";
}

$conn->close();
?>