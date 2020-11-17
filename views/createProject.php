<?php
/*
if (empty($_GET['id'])) {
    header('location: myProjects.php');
} else {

    //require_once '../models/conection.php';
    require_once '../models/user.php';

    $id = $_GET['id'];
}*/
include("../models/p.php");

$sql = "SELECT * FROM categorias";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--script src="../assets/js/functions.js"></script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php /*require_once '../partial/plantilla.php' */ ?>
    <title>Create Project</title>
</head>


<body>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate>
            <input type="text" name="usuario">
            <div class="form-group">
                <label for="uname">Titulo:</label>
                <input type="text" class="form-control" id="uname" placeholder="Tngrese titulo" name="titulo" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Este campo es requerido.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Descripcion:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Ingrese descripcion" name="descripcion" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Este campo es requerido.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Acepto terminos y condiciones.
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor acepta los terminos.</div>
                </label>
            </div>
            <!--COMBOBOX DE CATEGORIAS-->
            <div class="form-group">
                <label for="sel1">Categorias:</label>
                <select class="form-control" id="sel1" name="categorias">
                    <option></option>
                    <?php foreach ($result as $data) : ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['descripcion']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
           // PARA EVITAR REENVIO DE FORMULARIO
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>


    <?php

    require_once '../models/project.php';

    if (isset($_POST['submit'])) {

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $created = date("Y-m-d H:i:s");
        $modified = date("Y-m-d H:i:s");
        $usuarios_id = $_POST['usuario'];
        $categorias_id = $_POST['categorias'];

        $project = new project();
        $project->createProject($titulo, $descripcion, $created, $modified, $usuarios_id, $categorias_id);
    }

    ?>

    <?php// require_once '../partial/footer.php' ?>

</body>

</html>