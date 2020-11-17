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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

</head>

<header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!--No reutiliza el mismo 'componente' -->
    <!--?php require_once 'partial/header.php'; ?-->

    <?php require 'partial/header.php'; ?>
    <!--Reutilizar un 'componente' -->

</header>


<body>
    <div class="row">
        <div class="col-sm-8">
            <!--                                                                           Contenido-->
            <div class="container" style="width: auto;">
                <h4>Titulo Categoría</h4>
            </div>

            <div id="demo" class="carousel slide" data-ride="carousel">
                <h2>Carousel Example</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!--img src="la.jpg" alt="Los Angeles" style="width:100%;"-->
                            <img src="https://www.40defiebre.com/wp-content/uploads/2013/11/optimizacion.png" style="width:50%;" alt="1">
                        </div>

                        <div class="carousel-item">
                            <img src="https://www.softzone.es/app/uploads-softzone.es/2019/08/google-imagenes.jpg" style="width:50%;" alt="2">
                        </div>

                        <div class="carousel-item">
                            <img src="https://as.com/meristation/imagenes/2019/06/10/betech/1560195710_365328_1560195771_noticia_normal.jpg" style="width:50%;" alt="3">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <!--Descripción-->
            <div class="container" style="width: auto;">
                <p style="text-align: justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>


        </div>

        <div class="col-sm-4">

            <div class="container" style="width: auto;">
                <h4>Recomendaciones</h4>
                <p>Mira otros proyectos que pueden interesarte...</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre del Proyecto</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                        </tr>
                    </tbody>
                </table>
            </div>

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