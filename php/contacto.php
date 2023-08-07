<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include 'header.php'; ?>


    <div class="content header">
            <div class="contacto">
                <h2>Contáctenos</h2>
                 <div class="info">
                    <div class="ic">
                        <img class="fax" src="images/fax.gif" alt="Fax"/>
                        <h3 class="hic">Fax</h3>
                        <p class="pic">+506 1234-5678</p>
                    </div>

                    <div class="ic">
                        <img class="tel" src="images/telefono.gif" alt="Teléfono"/>
                        <h3 class="hic">Teléfono</h3>
                        <p class="pic">+506 1234-5678</p>
                    </div>

                    <div class="ic">
                        <img class="ubi" src="images/ubicacion.gif" alt="Ubicación"/>
                        <h3 class="hic">Ubicación</h3>
                        <p class="pic">San José, Costa Rica.</p>
                    </div>

                    <div class="ic">
                        <img class="email" src="images/correo-electronico.gif" alt="Email"/>
                        <h3 class="hic">Email</h3>
                        <p class="pic">rutacr@email.com</p>
                    </div>
                </div>
                <p class="parrafo">Si tiene alguna duda o algún comentario nos puede contactar a cualquiera de nuestros números o redes sociales, o bien, llenar la información de abajo y nosotros nos pondremos en contacto con usted.</p>
                
                <form action="formulario_contacto.php" method="post">
                    <h3>Contacto</h3>
                    <input type="text" name="Nombre" placeholder="Nombre">
                    <input type="text" name="Correo electrónico" placeholder="Correo">
                    <input type="text" name="Teléfono" placeholder="Teléfono">
                    <textarea name="mensaje" placeholder="Escriba su mensaje"></textarea>
                    <input type="submit" value="Enviar" id="boton">
                </form>
            </div>
        </div>

    <?php include 'footer.php'; ?>
    </body>
</html>