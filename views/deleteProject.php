<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>deleteProject</title>
</head>

<body>


    <h3><a href="myProjects.php" class="btnUpdate"> Go back</a></h3>

    <?php

    if (empty($_GET['idP'])) {
        header('location: myProjects.php');
    } else {

        //require_once '../models/conection.php';
        require_once '../models/project.php';

        $idP = $_GET['idP'];

        $project = new project();
        $project->deleteProject($idP);
    }

    ?>
</body>

</html>