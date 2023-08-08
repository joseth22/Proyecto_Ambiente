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
    <!DOCTYPE html>
<html>
<head>
    <title>Factura de Tiquete de Autobús</title>
    <link rel="stylesheet" href="compra.css">
</head>
<body>
    <div class="factura">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $origen = $_POST["origen"];
            $destino = $_POST["destino"];
            $fecha = $_POST["fecha"];
            $precio = 50.00; // Precio del tiquete (puedes obtenerlo de la base de datos)

            // Cálculos para la factura
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
        <?php
        } else {
            header("Location: index.html");
            exit();
        }
        ?>
    </div>
</body>
</html>