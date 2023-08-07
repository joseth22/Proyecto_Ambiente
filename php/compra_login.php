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
                <h2 th:text="#{IniSesion}">Inicie sesion</h2>
                <form name="f" method="post"> 
                    <fieldset>
                        <div class="form-group">
                            <label class="Campo" for="txtUsername" >Usuario:</label>
                            <input type="text" class="form-control" id="username" name="username" 
                                   placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="txtPassword" class="Campo">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Password">
                        </div>

                        <div class="form-actions" style="margin-top: 12px;">
                            <button type="submit" href="inicio.php" class="btn btn-success">Aceptar</button>
                        </div>
                    </fieldset>
                </form>

                <a class="mt-5" href="register.php" role="button">Registrarse</a>

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

