<!DOCTYPE html>
<html lang="en">

<head>
    <title>RiseUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="img/RiseUp.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

</head>

<header class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!--No reutiliza el mismo 'componente' -->
    <!--?php require_once 'partial/header.php'; ?-->

    <?php require 'partial/header.php'; ?>
    <!--Reutilizar un 'componente' -->

</header>


<body>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <!--                                                                           Contenido-->

            <?php require 'views/projectList.php'; ?>


        </div>

        <div class="col-sm-4">
            <!--                                                                                     Recomendaciones-->

            <?php require 'partial/recomendaciones.php'; ?>

        </div>
    </div>
</body>

<footer class="container" style="width: auto;">
    <!--                                                                                 Footer-->
    <hr style="color: #000000" />

    <div class="row">
        <div class="col-sm-4">
            ACERCA DE NOSOTROS
            <ol>
                <li><a href="#">Acerca de nosotros</a></li>
                <li><a href="#">Estadisticas</a></li>
                <li><a href="#">Objetivos</a></li>
            </ol>
        </div>
        <div class="col-sm-5">
            ATENCION AL CLIENTE
            <ol>
                <li><a href="#">Centro de ayuda</a></li>
                <li><a href="#">Atencion al cliente</a></li>
                <li><a href="#">Ideadores</a></li>
                <li><a href="#">Inversionistass</a></li>
            </ol>
        </div>
    </div>

    <div class="container" style="text-align:center;">
        <a href="https://www.facebook.com/" class="fab fa-facebook-square btn-lg" role="button"></a>

        <a href="https://web.whatsapp.com/" class="fab fa-whatsapp btn-lg" role="button"></a>

        <a href="https://twitter.com/?lang=es" class="fab fa-twitter btn-lg" role="button"></a>
    </div>




</footer>

</html>