<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <?php require_once '../partial/plantillaAdmin.php' ?>
    <title>userList</title>
</head>

<body>


    <table>

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>LastName</th>
            <th>description</th>
            <th>studies</th>
            <th>Profile</th>            
            <th>Email</th>
            <th> </th>
        </tr>

        <?php

        $id = $_SESSION['idUser'];

        require_once '../models/conection.php';

        $mysql = "SELECT * FROM users";

        $query = mysqli_query($con, $mysql);

        $result = mysqli_num_rows($query);
        if ($result > 0) {

            while ($data = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td><?php echo $data["id"]; ?></td>
                    <td><?php echo $data["name"]; ?></td>
                    <td><?php echo $data["lastname"]; ?></td>
                    <td><?php echo $data["studies"]; ?></td>
                    <td><?php echo $data["profile"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td>
                        <a href="#" class="btnUpdate">Update</a>
                        <a href="#" class="btnDelete">Delete</a>
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