<?php

if (empty($_GET['id'])) {
    header('location: index.php');
} else {

    //require_once '../models/conection.php';
    //require_once '../models/user.php';

    $id = $_GET['id'];


    require_once '../models/conection.php';

    $query = mysqli_query($con, "SELECT * FROM proyectos WHERE categorias_id = '$id' ORDER BY id DESC ");

    $result = mysqli_num_rows($query);
    if ($result > 0) {

        $data = mysqli_fetch_array($query);
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

</head>

<header>
    <!--No reutiliza el mismo 'componente' -->
    <!--?php require_once 'partial/header.php'; ?-->

    <?php require '../partial/header.php'; ?>
    <!--Reutilizar un 'componente' -->

</header>


<body>
    <div class="row">
        <div class="col-sm-8">
            <!--                                                                           Contenido-->
            <div class="container" style="width: auto;">
                <h4><?php echo $data["categorias_id"]; ?></h4>
            </div>

            <div class="container" style="width: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <td></td>
                            <th>id</th>
                            <th>titulo</th>
                            <th>descripcion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td></td>
                                <td><?php echo $data["id"]; ?></td>
                                <td><?php echo $data["titulo"]; ?></td>
                                <td><?php echo $data["descripcion"]; ?></td>
                                <td>
                                    <a href="invest.php" class="btnUpdate">Invest</a>
                                </td>
                            </tr>

                        <?php
                        }
                        print_r($data);

                        ?>
                    </tbody>
                </table>
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