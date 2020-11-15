<?php

if (empty($_GET['id'])) {
    header('location: myProjects.php');
} else {

    //require_once '../models/conection.php';
    require_once '../models/user.php';

    $id = $_GET['id'];
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
    <title>Create Project</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="text" name="title" required placeholder="Enter the project's title">
        <input type="text" name="category" required placeholder="Enter the project's category">
        <textarea name="description" cols="42" rows="12" required placeholder="Enter a project's short description"></textarea>
        <input type="text" name="goal" required placeholder="Enter the goal you expect">
        <input type="hidden" name="id" required placeholder="Enter your id" value="<?php echo $id ?>">

        <input type="submit" name="send" value="Create">

    </form>

    <?php

    require_once '../models/project.php';

    if (isset($_POST['send'])) {

        $title = $_POST['title'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $goal = $_POST['goal'];
        $id = $_POST['id'];

        $project = new project();
        $project->createProject($title, $category, $description, $goal, $id);
    }

    ?>

    <?php require_once '../partial/footer.php' ?>

</body>

</html>