<?php
$localhost = "3306";
$username = "root";
$password = "Jmontero123.";
$dbname = "viajes";

$conn = mysqli_connect($localhost, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM contacto WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "ID no proporcionado para eliminar.";
}

$conn->close();
?>
