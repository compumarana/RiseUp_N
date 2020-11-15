<?php

require_once 'user.php';

class project extends user
{

    public $idP;
    public $title;
    public $category;
    public $description;
    public $goal;

    public function __construct()
    {
    }

    public function createProject($title, $category, $description, $goal, $id)
    {

        require_once 'user.php';
        require 'conection.php';

        $sql = "INSERT INTO project (title, category, description, goal, user_id) 
                        VALUES ('$title', '$category', '$description', $goal, $id)";


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

    public function readProject($idP, $title, $category, $description, $goal)
    {

        require_once 'user.php';
        require_once 'conection.php';

        $sql = "SELECT * FROM project WHERE idP = '$idP'";
    }

    public function listProject()
    {

        require_once 'user.php';

        $sql = "SELECT * FROM project";

    }

    public function updateProject($idP, $title, $category, $description, $goal)
    {

        require_once 'user.php';
        require 'conection.php';

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

    public function deleteProject($idP)
    {

        require 'conection.php';

        $sql = "DELETE FROM project WHERE idP =$idP";

        if ($con->query($sql) === TRUE) {
        ?>
            <h3 class="ok">the project have been eliminated</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ops there is an issue!</h3>
<?php
        }
    }
}
