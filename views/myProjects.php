<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--script src="../assets/js/functions.js"></script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php /*require_once '../partial/plantilla.php' */ ?>
    <title>Mis Proyectos</title>
</head>


<header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../index.php">RiseUp</a>

</header>

<body>
    <br>
    <br>






    <div class="row">
        <div class="col-sm-8">
            <!--                                                                                     Contenido-->
            <a href="../index.php">
                <button type="button" class="btn btn-warning ml-3 mr-4 ">Ver todos los Proyectos</button>
            </a>

            <hr>
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
                                <button href="updateProject.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-warning ml-3 mr-4 ">Update</button>
                                <button href="deleteProject.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-info">Delete</button>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach ?>
        </div>

        <div class="col-sm-4">
            <!--                                                                                     Recomendaciones-->

            <?php require '../partial/recomendaciones.php'; ?>

        </div>
    </div>
</body>