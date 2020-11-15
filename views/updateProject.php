<?php
require '../models/conection.php';

//mostrar datos del proyecto para actualizar

if (empty($_GET['idP'])) {
    header('location: myProjects.php');
}

$idP = $_GET['idP'];

$sql = "SELECT * FROM project WHERE idP = $idP";

$query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);


if ($result > 0) {

    while ($data = mysqli_fetch_array($query)) {

        $idP           = $data['idP'];
        $title         = $data['title'];
        $category      = $data['category'];
        $description   = $data['description'];
        $goal          = $data['goal'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <script src="../assets/js/functions.js"></script>
    <?php require_once '../partial/plantilla.php' ?>
    <title>UpdateProject</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="hidden" name=idP value="<?php echo $idP; ?>">
        <input type="text" name="title" required placeholder="Enter the project's title" value="<?php echo $title; ?>">
        <input type="text" name="category" required placeholder="Enter the project's category" value="<?php echo $category; ?>">
        <input type="text" name="description" cols="42" rows="12" required placeholder="Enter a project's short description" value="<?php echo $description; ?>">
        <input type="text" name="goal" required placeholder="Enter the goal you expect" value="<?php echo $goal; ?>">
        <!--<input type="text" name="id" required placeholder="Enter your id" value="">-->

        <input type="submit" name="send" value="Update">

    </form>



    <?php

    if (isset($_POST['send'])) {

        $idP         = $_POST['idP'];
        $title       = $_POST['title'];
        $category    = $_POST['category'];
        $description = $_POST['description'];
        $goal        = $_POST['goal'];

        $sql = "UPDATE project SET
            title = '$title',
            category = '$category',
            description = '$description',
            goal = $goal
            WHERE idP = $idP";

        if ($con->query($sql) === TRUE) {
    ?>
            <h3 class="ok">The project have been updated successfully</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
    <?php
        }
    }

    ?>

    <?php require_once '../partial/footer.php' ?>

</body>

</html>