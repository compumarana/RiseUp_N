<?php



class user
{

    public $id;
    public $name;
    public $lastName;
    public $studies;
    public $profile;
    public $budget;  //presupuesto
    public $email;
    public $pass;

    public function __construct()
    {
    }

    public function create($name, $lastName, $studies, $profile, $budget, $email, $pass)
    {

        require 'conection.php';

        $sql = "INSERT INTO users (name, lastname, studies, profile, budget, email, pass)
            VALUES ('$name', '$lastName', '$studies', '$profile', $budget, '$email', '$pass')";

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
