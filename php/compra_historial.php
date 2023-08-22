<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compra</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include 'header-compra.php'; ?>
    <h1>Historial de Tiquetes</h1>
    <ul id="historial"></ul>

    <script>
        // Ejemplo de datos simulados (reemplaza esto con una solicitud al backend)
        const historialCompras = [
            { fecha: '2023-08-01', Precio: 50, detalle: 'Su viaje empeza desde Cartago hacia San Jose' },
            { fecha: '2023-08-03', Precio: 75, detalle: 'Su viaje empeza desde San Jose  hacia Guanacaste' },
            { fecha: '2023-08-01', Precio: 50, detalle: 'Su viaje empeza desde San Jose hacia Cartago' },
            { fecha: '2023-08-03', Precio: 75, detalle: 'Su viaje empeza desde Guanacaste  hacia San Jose ' },
            // ... más registros de historial de compras
        ];

        const historialList = document.getElementById('historial');

        // Rellenar la lista con los datos del historial de compras
        historialCompras.forEach(compra => {
            const listItem = document.createElement('li');
            listItem.textContent = `Fecha: ${compra.fecha}, Monto: ${compra.monto}, Detalle: ${compra.detalle}`;
            historialList.appendChild(listItem);
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>