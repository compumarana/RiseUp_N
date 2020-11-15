<?php
require '../models/conection.php';

//mostrar datos del proyecto para actualizar

if (empty($_GET['id'])) {
    header('location: ../views/');
}

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id";

$query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);


if ($result > 0) {

    while ($data = mysqli_fetch_array($query)) {

        $id        = $data['id'];
        $name      = $data['name'];
        $lastName  = $data['lastname'];
        $studies   = $data['studies'];
        $profile   = $data['profile'];
        $budget    = $data['budget'];
        $email     = $data['email'];
        $pass      = $data['pass'];
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
    <title>updateProfile</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        <input type="text" name="lastname" placeholder="Enter your lastname" value="<?php echo $lastName; ?>">
        <input type="text" name="studies" placeholder="Enter your studies" value="<?php echo $studies; ?>">
        <input type="text" name="profile" placeholder="Enter a short description of you" value="<?php echo $profile; ?>">
        <input type="text" name="budget" placeholder="Enter your budget" value="<?php echo $budget; ?>">
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirmPassword" placeholder="Confirm your password">

        <input type="submit" name="submit" value="send">

    </form>

    <?php

    require_once '../models/user.php';

    if (isset($_POST['submit'])) {

        $id        = $_POST['id'];
        $name      = $_POST['name'];
        $lastName  = $_POST['lastname'];
        $studies   = $_POST['studies'];
        $profile   = $_POST['profile'];
        $budget    = $_POST['budget'];
        $email     = $_POST['email'];
        $pass      = md5($_POST['password']);

         /*$updateUser = new user();
         $updateUser->update($id, $name, $lastName, $studies, $profile, $budget, $email, $pass);*/

         $sql = "UPDATE users SET
            name = '$name',
            lastname = '$lastName',
            studies = '$studies',
            profile = '$profile',
            budget = $budget,
            email = '$email',
            pass = '$pass'
            WHERE id = $id";
            
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

    <?php require_once '../partial/footer.php' ?>

</body>

</html>