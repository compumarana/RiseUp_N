<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio de Sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php require_once '../partial/header.php'; ?>
</head>

<body>

    <a href="../controllers/login.php">go to login</a>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="lastname" placeholder="Enter your lastname">
            <input type="text" name="studies" placeholder="Enter your studies">
            <input type="text" name="profile" placeholder="Enter a short description of you">
            <input type="text" name="budget" placeholder="Enter your budget">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="password" name="confirmPassword" placeholder="Confirm your password">
        </div>


        <input type="submit" name="submit" value="send">
        
        <button type="button" class="btn btn-primary">Primary</button>

    </form>

    <?php

    require '../models/user.php';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $lastName = $_POST['lastname'];
        $studies = $_POST['studies'];
        $profile = $_POST['profile'];
        $budget = $_POST['budget'];  //presupuesto
        $email = $_POST['email'];
        $pass = md5($_POST['password']);

        $user = new user();
        $estado = $user->create($name, $lastName, $studies, $profile, $budget, $email, $pass);
    }

    ?>

</body>

</html>