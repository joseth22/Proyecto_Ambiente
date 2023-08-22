<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/rutas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .image-container {
            display: flex;
            justify-content: center; /* Opcional: Alinea las imágenes al centro */
            align-items: center; /* Opcional: Alinea las imágenes verticalmente */
        }

        .image-container img {
            max-width: 100%; /* Asegura que las imágenes no se salgan de su contenedor */
            margin: 15px; /* Espacio entre las imágenes */
        }
        .h1 {
            text-align: center;
        }
    </style>

    </head>
    <body>

    <?php include 'header.php'; ?>
<!--Sección de rutas-->
<div>
        <h1 class="h1">Rutas</h1>

        <div class="image-container">
            <div class="card" style="width: 18rem; margin: 15px;">
                <img src="../img/rutacar.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>Cartago</h3>100 mestros norte de la estacion de trenes.</p>
                </div>
            </div>
            <br>

            
            <div class="card" style="width: 18rem; margin: 15px;">
                <img src="../img/rutaguana.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>Guanacaste</h3>Al frente del centro comercial de Liberia.</p>
                </div>
            </div>
            <br>

            
            <div class="card" style="width: 18rem; margin: 15px;">
                <img src="../img/rutasan.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>San Jose</h3>250 metros de la coca cola.</p>
                </div>
            </div>
            
        </div>
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