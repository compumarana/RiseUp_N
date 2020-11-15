<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <?php require_once '../partial/plantilla.php' ?>
    <title>projectList</title>
</head>

<body>

    <h2>Lista de proyectos</h2>
    <?php
    require_once '../models/conection.php';

    $email = $_SESSION['email'];

    $query = mysqli_query($con, "SELECT id FROM users WHERE email = '$email'");

    $result = mysqli_num_rows($query);
    if ($result > 0) {

        $data = mysqli_fetch_array($query);
    }
    ?>
    <a href="createProject.php?id=<?php echo $data["id"]; ?>" class="btnNew">Create new project</a>

    <a href="myProjects.php" class="btnNeutral">My Projects</a>

    <table>

        <tr>
            <th>id</th>
            <th>title</th>
            <th>category</th>
            <th>description</th>
            <th>goal</th>
            <th>name</th>
            <th> </th>
        </tr>

        <?php

        //require '../models/conection.php';        

        $mysql = "SELECT p.idP, p.title, p.category, p.description, p.goal, u.name 
                        FROM project p LEFT JOIN users u ON p.user_id = u.id";

        $query = mysqli_query($con, $mysql);

        $result = mysqli_num_rows($query);
        if ($result > 0) {

            while ($data = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td><?php echo $data["idP"]; ?></td>
                    <td><?php echo $data["title"]; ?></td>
                    <td><?php echo $data["category"]; ?></td>
                    <td><?php echo $data["description"]; ?></td>
                    <td><?php echo $data["goal"]; ?></td>
                    <td><?php echo $data["name"]; ?></td>
                    <td>
                        <a href="invest.php" class="btnUpdate">Invest</a>
                    </td>
                </tr>

        <?php
            }
        }

        ?>
    </table>

    <?php //require_once '../partial/footer.php'
    ?>


</body>

</html>