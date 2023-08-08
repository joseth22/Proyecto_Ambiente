<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra en línea</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link real="stylesheet" heref=".../css/compra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include 'header-compra.php'; ?>

    <div class="select">
        <h1 class="h1">Seleccione una ruta:</h1>
        <select class="custom-select custom-select-lg mb-3">
            <option selected>--Seleccionar una ruta--</option>
            <option value="1">San José-Cartago</option>
            <option value="2">San José-Guanacaste</option>
            <option value="3">Cartago-San José</option>
            <option value="4">Guanacaste-San José</option>
        </select>

        <form>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
            
            <button type="submit">Agregar al carrito</button>
        </form>
        <!--Llamar a la clase compra_carrito-->

        
    </div>

    <?php include 'footer.php'; ?>

    <!--JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
        
    </body>
</html>