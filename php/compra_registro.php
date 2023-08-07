<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container">
            <h1>Registrarse</h1>
            <div class="card-body"> 
                <div class="container"> 
                    <form action="cuenta.php" method="POST">    
                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="usuario">Ingrese su usuario:</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="Usuario cliente" id="username" name="username"  aria-describedby="emailHelp"> 
                            </div>
                        </div>
                        
                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="nombre">Ingrese su nombre:</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="Nombre cliente" id="nombres" name="nombres"  aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="apellidos">Ingrese sus apellidos: </label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="Apellidos" id="apellidos" name="apellidos" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="num_tarjeta" >Ingrese el numero de tarjeta: </label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="Num tarjeta" id="num_tarjeta" name="tarjeta" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="cvv" th:text="#{ColCVV}">Codigo de la tarjeta:</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="CVV" id="cvv" name="cvv" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group mb-3 row"> 
                            <label class="col-md-2 col-form-label" for="password">Contraseña:</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control form-control-sm col-md-6" placeholder="Contraseña" id="password" name="password" aria-describedby="emailHelp"> 
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary" value="Guardar">Aceptar</button>
                    </form>  
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

