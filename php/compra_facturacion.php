<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/factura.css">
    <link rel="stylesheet" href="../css/compra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
<?php include 'header-compra.php'; ?>
<div class="factura">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["origen"])) {
            $origen = $_POST["origen"];
        } else {
            $origen = "Cartago";
        }

        if (isset($_POST["destino"])) {
            $destino = $_POST["destino"];
        } else {
            $destino = "San Jose";
        }

        if (isset($_POST["fecha"])) {
            $fecha = $_POST["fecha"];
        } else {
            $fecha = "2023-08-01";
        }
        $precio = 50.00;
        $subtotal = $precio;
        $impuesto = $subtotal * 0.16;
        $total = $subtotal + $impuesto;
    ?>
    <h2>Factura de Tiquete de Autobús</h2>
    <table>
        <tr>
            <td><strong>Origen:</strong></td>
            <td><?php echo $origen; ?></td>
        </tr>
        <tr>
            <td><strong>Destino:</strong></td>
            <td><?php echo $destino; ?></td>
        </tr>
        <tr>
            <td><strong>Fecha:</strong></td>
            <td><?php echo $fecha; ?></td>
        </tr>
        <tr>
            <td><strong>Precio Unitario:</strong></td>
            <td>$<?php echo number_format($precio, 2); ?></td>
        </tr>
        <tr>
            <td><strong>Subtotal:</strong></td>
            <td>$<?php echo number_format($subtotal, 2); ?></td>
        </tr>
        <tr>
            <td><strong>Impuesto (16%):</strong></td>
            <td>$<?php echo number_format($impuesto, 2); ?></td>
        </tr>
        <tr>
            <td><strong>Total:</strong></td>
            <td>$<?php echo number_format($total, 2); ?></td>
        </tr>
    </table>
    <tr>
    <td colspan="2">
        <form method="post" action="eliminar_factura.php">
            <input type="hidden" name="factura_id" value="<?php echo $factura_id; ?>">
            <button type="submit">Eliminar Factura</button>
        </form>
    </td>
</tr>
    
    <?php
    } else {
        header("Location: carrito_compra.php");
        exit();
    }
    ?>
</div>
</body>
</html>
