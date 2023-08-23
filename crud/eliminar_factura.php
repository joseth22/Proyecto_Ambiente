<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["factura_id"])) {
        $factura_id = $_POST["factura_id"];
        if (isset($_SESSION['facturas'][$factura_id])) {
            unset($_SESSION['facturas'][$factura_id]);
            $_SESSION['facturas'] = array_values($_SESSION['facturas']);
        }
    }
}

    header("Location: inicio.php"); 
    exit();
?>
