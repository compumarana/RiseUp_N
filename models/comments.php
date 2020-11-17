<?php


class comments
{

    public $idP;
    public $idU;
    public $comentario;
    public $created;
    public $modified;

    public function comment($idP, $idU, $comentario, $created, $modified)
    {
        require 'p.php';
        $sql = "INSERT INTO detalle (comentario, created, modified, usuarios_id, proyectos_id)
                    VALUES('$comentario','$created','$modified','$idU','$idP')";

        if ($con->query($sql) === TRUE) {
?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Exitoso!</strong> 
                Gracias por tu comentario..
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

    public function read($idP){
        require 'p.php';
        $sql = "SELECT d.comentario
                FROM detalle d
                INNER JOIN Proyectos p ON d.proyectos_id = p.id
                WHERE p.id=$idP";
    }
}

?>