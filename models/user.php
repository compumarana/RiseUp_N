<?php



class user
{

    public $id;
    public $nombres;
    public $lastName;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $correo;
    public $contrasena;
    public $created;
    public $modfied;

    public function __construct()
    {
    }

    public function create($nombres, $apellidos, $direccion, $telefono, $correo, $contrasena, $created, $modified)
    {

        require 'p.php';

        $sql = "INSERT INTO usuarios (nombres, apellidos, direccion, telefono, correo, contrasena, created, modified)
            VALUES ('$nombres', '$apellidos', '$direccion', '$telefono', '$correo', '$contrasena', '$created', '$modified')";

        if ($con->query($sql) === TRUE) {
?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Felicidades!</strong> Ha creado una cuenta.
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>ops!</strong> Lamentablemente ha ocurrido un error.
            </div>
        <?php
        }
    }

    public function read($id)
    {

        require 'conection.php';


        $sql = "SELECT * FROM users WHERE id = '$id";

        if ($con->query($sql) === TRUE) {
        ?>
            <h3 class="ok">A new account have been created</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
        <?php
        }
    }

    public function userList()
    {

        require 'conection.php';


        $sql = "SELECT * FROM users";

        if ($con->query($sql) === TRUE) {
        ?>
            <h3 class="ok">A new account have been created</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
        <?php
        }
    }

    public function update($id, $name, $lastName, $studies, $profile, $email, $budget, $pass)
    {

        require 'conection.php';


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
            <h3 class="ok">A new account have been created</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
        <?php
        }
    }

    public function delete($id)
    {

        require 'conection.php';


        $sql = "DELETE FROM users WHERE id = '$id'";

        if ($con->query($sql) === TRUE) {
        ?>
            <h3 class="ok">A new account have been created</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
        <?php
        }
    }

    public function verify($email, $pass)
    {

        require 'conection.php';


        $sql = "SELECT name, lastname, studies, profile, budget FROM users WHERE email ='$email AND pass = '$pass";

        if ($con->query($sql) === TRUE) {
        ?>
            <h3 class="ok">A new account have been created</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
<?php
        }
    }
}
