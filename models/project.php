<?php


class project
{

    public $id;
    public $titulo;
    public $descripcion;
    public $created;
    public $modified;
    public $usuarios_id;
    public $categorias_id;

    public function __construct()
    {
    }

    public function createProject($titulo, $descripcion, $created, $modified, $usuarios_id, $categorias_id)
    {

        require 'p.php';

        $sql = "INSERT INTO proyectos (titulo, descripcion, created, modified, usuarios_id, categorias_id) 
                VALUES ('$titulo', '$descripcion', '$created', '$modified', '$usuarios_id', '$categorias_id')";


        if ($con->query($sql) === TRUE) {
?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Exitoso!</strong> El proyecto se ha publicado de manera correcta.
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
