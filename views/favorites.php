<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--script src="../assets/js/functions.js"></script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="../img/RiseUp.ico" type="image/x-icon">
    <?php /*require_once '../partial/plantilla.php' */ ?>
    <title>Mis Favoritos</title>
</head>


<header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../index.php"><img src="../img/RiseUpRT.png" class="img-fluid mx-auto d-block" width="20" height="20" alt="RiseUp" title="RiseUp"></a>

</header>

<body >
    <br>
    <br>
    <h4 class="pl-4">Mis Proyectos Favoritos</h4>
    <div class="row">
        <div class="col-sm-8">
            <!--                                                                                     Contenido-->
            <a href="../index.php" class="p-2">
                <button type="button" class="btn btn-warning ml-3 mr-4 ">Ver todos los Proyectos</button>
            </a>

            <hr class="ml-4">
            <br>

            <?php

            //$id = $_SESSION['idUser'];

            require_once '../models/p.php';

            $sql = "SELECT p.id, p.titulo, p.descripcion, c.descripcion AS categorias
                FROM proyectos p
                INNER JOIN categorias c ON p.categorias_id = c.id
                WHERE usuarios_id = 1";

            $result = mysqli_query($con, $sql);

            foreach ($result as $data) :
            ?>


                <div class="d-flex justify-content-center">
                    <div class="card " style="width:95%; margin-bottom: 20px;">
                        <div class="card-body">

                            <h4 class="card-title"><?php echo $data["id"] . "-" . $data["titulo"]; ?></h4>
                            <p class="card-text"><?php echo $data["descripcion"]; ?></p>
                            <p class="card-text"><?php echo $data["categorias"]; ?></p>

                            <div class="row">

                            </div>

                            <br>

                            <div class="card-footer">
                                <a href="updateProject.php?id=<?php echo $data["id"]; ?>" data-toggle="modal" data-target="#myModal">

                                    <button type="button" class="btn btn-warning ml-3 mr-4 ">Modificar</button>

                                </a>

                                <button href="deleteProject.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-info">Eliminar</button>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach ?>
        </div>

        <div class="col-sm-4">
            <!--                                                                                     Recomendaciones-->

            <?php include '../partial/recomendaciones.php'; ?>

        </div>
    </div>

    <!--                                                                      The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-warning text-white">
                    <h4 class="modal-title">Modificar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!--?php require 'updateProject.php'; ?-->
                    <h4>Se daña el diseño si de caga la linea de arriba</h4>
                    <p>Pero puedes darle click <a href="updateProject.php?id=<?php echo $data["id"]; ?>">Aqui</a> para ir a la vista de Modificacion</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!--                                                Fin Modal-->



</body>