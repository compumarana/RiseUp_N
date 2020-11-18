<!DOCTYPE html>
<html lang="en">

<head>
    <title>RiseUp - Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>

</head>

<header class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="../index.php">RiseUp</a>

</header>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2>Únete a la Familia RiseUp</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate id="formCheckPassword">
            <!--div class="form-group row">
                <label for="nombres" class="col-sm-2 col-form-label">Nombres:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" placeholder="Escribe Nombres" name="nombres" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Por favor rellene este campo.</div>
                </div>
            </div-->


            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" placeholder="Escribe Nombres" name="nombres" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Escribe Apellidos" name="apellidos" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" placeholder="Escribe Dirección" name="direccion" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" class="form-control" id="telefono" placeholder="Escribe telefono" name="telefono" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" placeholder="Escribe correo" name="correo" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Escribe contraseña" name="pwd" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="pwd2">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Escribe contraseña" name="pwd2" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>

            <!--CHECKBOX-->
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Estoy de acuerdo con <a href="reglasConvivencia.php" data-toggle="modal" data-target="#myModal">Reglas de Convivencia</a>.
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Marque esta casilla de verificación para continuar.</div>
                </label>
            </div>

            <!--                                                                      The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-warning text-white">
                            <h4 class="modal-title">Reglas de Convivencia</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <?php require 'reglasConvivencia.php'; ?>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!--                                                Fin Modal-->
            <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
        </form>
        <br>
        <br>
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
        //VALIDAR CONTRASEÑAS
        $("#formCheckPassword").validate({
            rules: {
                pwd: {
                    required: true,
                    minlength: 6,
                    maxlength: 10,

                },

                pwd2: {
                    equalTo: "#pwd",
                    minlength: 6,
                    maxlength: 10
                }


            },
            messages: {
                pwd: {
                    required: "Campo Requerido",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
                },
                pwd2: {
                    equalTo: "La contraseña debe ser igual al anterior",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
                }
            }

        });
    </script>


    <?php
    require "../models/user.php";
    require "../models/p.php";

    if (isset($_POST['submit'])) {

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $pass = md5($_POST['pwd2']);
        $created = date("Y-m-d H:i:s");
        $modified = date("Y-m-d H:i:s");

        $project = new user();
        $project->create($nombres, $apellidos, $direccion, $telefono, $correo, $pass, $created, $modified);
    }

    ?>


</body>

</html>