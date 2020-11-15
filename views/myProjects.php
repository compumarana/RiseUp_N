<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <?php require_once '../partial/plantilla.php' ?>
    <title>myProjects</title>
</head>

<body>
<br>
<br>
    <a href="projectList.php" class="btnUpdate">See all projects</a>

    <table>

        <tr>
            <th>id</th>
            <th>title</th>
            <th>category</th>
            <th>description</th>
            <th>goal</th>
            <th> </th>
        </tr>

        <?php

        $id = $_SESSION['idUser'];

        require_once '../models/conection.php';

        $mysql = "SELECT * FROM project WHERE user_id = $id";

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
                    <td>
                        <a href="updateProject.php?idP=<?php echo $data["idP"]; ?>" class="btnUpdate">Update</a>
                        <a href="deleteProject.php?idP=<?php echo $data["idP"]; ?>" class="btnDelete">Delete</a>

                       
                    </td>
                </tr>

        <?php
            }
        }

        ?>

        
    </table>

    <?php require_once '../partial/footer.php' ?>



</body>

</html>