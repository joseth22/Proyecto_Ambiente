<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include 'header.php'; ?>


    <!--CAROUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/imagen-1.jpg" class="d-block" alt="imagen1">
            </div>
            <div class="carousel-item">
                <img src="../img/imagen-2.jpg" class="d-block" alt="imagen2">
            </div>
            <div class="carousel-item">
                <img src="../img/imagen-3.jpg" class="d-block" alt="imagen3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
    <!-- TERMINA CAROUSEL -->

    <!--Sección de terminales-->


    <div>
        <h1 class="h1">Terminales</h1>
                <img src="../img/cartago.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>Cartago</h3>100 metros Norte de la estacion de trenes.</p>
                </div>
            </div>

           
            <div class="card" style="width: 18rem;">
                <img src="../img/guanacaste.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>Guanacaste</h3>Al frente del centro comercial de Liberia.</p>
                </div>
            </div>

            
            <div class="card" style="width: 18rem;">
                <img src="../img/san jose.jpg" alt="...">
                <div class="card-body">
                    <p class="card-text"><h3>San José</h3>250 metros de la Coca-Cola.</p>
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

