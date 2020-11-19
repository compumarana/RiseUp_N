<?php

if (empty($_GET['id'])) {
    header('location: index.php');
} else {

    //require_once '../models/conection.php';
    //require_once '../models/user.php';

    $id = $_GET['id'];


    require_once '../models/p.php';

    $sql = "SELECT P.id, P.titulo, P.descripcion, p.usuarios_id, P.categorias_id, C.descripcion AS descripCat FROM proyectos P INNER JOIN categorias C ON P.categorias_id = C.id WHERE categorias_id = '$id' ORDER BY id DESC ";

    $result = mysqli_query($con, $sql);
    $cont = mysqli_num_rows($result);
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

</head>

<header class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!--a class="navbar-brand" href="../index.php"><img src="../img/RiseUpRT.png" class="img-fluid mx-auto d-block" width="20" height="20" alt="RiseUp" title="RiseUp"></a-->
    <?php include '../partial/header.php'; ?>

</header>


<body>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <!--                                                                           Contenido-->
            <div class="container" style="width: auto;">
                <h4>
                    <?php
                    if ($cont > 0) {
                        $data = mysqli_fetch_array($result);
                        echo $data["descripCat"];
                    }else{
                        echo "No hay proyectos con esta categoria";
                    }
                    
                    ?>
                </h4>
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
                        foreach ($result as $data) :
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

                        <?php endforeach ?>
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