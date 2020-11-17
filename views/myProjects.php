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
    <a href="projectList.php" class="btnUpdate">See all projects</a>

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
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["titulo"]; ?></td>
                <td><?php echo $data["descripcion"]; ?></td>
                <td><?php echo $data["categorias"]; ?></td>
                <td>
                    <a href="updateProject.php?id=<?php echo $data["id"]; ?>" class="btnUpdate">Update</a>
                    <a href="deleteProject.php?id=<?php echo $data["id"]; ?>" class="btnDelete">Delete</a>


                </td>
            </tr>

        <?php endforeach ?>
</body>