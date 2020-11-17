<?php

    require('p.php');

    $comentario = mysql_real_escape_string($_POST['comentario']);

    $sql = "INSERT INTO detalle (comentario, created, modified, usuarios_id, proyectos_id)
                    VALUES('$comentario','$created','$modified','$idU','$idP')";

    

?>