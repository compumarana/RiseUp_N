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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="text" name="email" require placeholder="Enter your email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" name="pass" require placeholder="Enter your password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="send" value="send">Submit</button>
            </div>
        </div>
    </form>







</body>

<?php

require_once '../models/conection.php';

session_start();
if (!empty($_SESSION['active'])) {

    header('location: ../views/');
} else {

    $alert = '';

    if (!empty($_POST)) {

        if (empty($_POST['email']) || empty($_POST['pass'])) {

            $alert = 'Enter you email and password';
        } else {

            $email = $_POST['email'];
            $pass = md5(mysqli_real_escape_string($con, $_POST['pass']));

            $sql = "SELECT * FROM users WHERE email = '$email' AND pass ='$pass'";
            $query = mysqli_query($con, $sql);
            $result = mysqli_num_rows($query);

            if ($result > 0) {

                $data = mysqli_fetch_array($query);

                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];

                header('location: ../views/');
            } else {
                $alert = 'incorrect user or password';
                session_destroy();
            }
        }
    }
}

?>

</html>