<?php

require_once '../models/p.php';
require '../partial/header.php';

session_start();
if (!empty($_SESSION['active'])) {

    header('location: ../views/');
} else {

    $alert = '';

    if (!empty($_POST)) {

        if (empty($_POST['email']) || empty($_POST['pwd'])) {

            $alert = 'Llene todos los campos!';
        } else {

            $email = $_POST['email'];
            $pass = md5(mysqli_real_escape_string($con, $_POST['pwd']));

            $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena ='$pass'";
            $query = mysqli_query($con, $sql);
            $result = mysqli_num_rows($query);

            if ($result > 0) {

                $data = mysqli_fetch_array($query);

                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['name'] = $data['nombres'];
                $_SESSION['email'] = $data['correo'];

                header('location: ../views/');
            } else {
                $alert = 'Los credenciales ingresadas no son correctas';
                session_destroy();
            }
        }
    }
}

?>

</html>