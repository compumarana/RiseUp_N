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
</head>

<header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../index.php">RiseUp</a>

</header>

<body>
    <br>
    <br>
    <div class="container">
        <h2>Únete a la Familia RiseUp</h2>
        <form action="/action_page.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="uname">Nombres:</label>
                <input type="text" class="form-control" id="nombres" placeholder="Escribe Nombres" name="nombres" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="uname">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Escribe Apellidos" name="apellidos" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="uname">Dirección:</label>
                <input type="text" class="form-control" id="direccion" placeholder="Escribe Dirección" name="direccion" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="uname">Telefono:</label>
                <input type="text" class="form-control" id="telefono" placeholder="Escribe telefono" name="telefono" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>
            <div class="form-group">
                <label for="uname">Correo:</label>
                <input type="text" class="form-control" id="correo" placeholder="Escribe correo" name="correo" required>
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
                <label for="pwd">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Escribe contraseña" name="pwd2" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Por favor rellene este campo.</div>
            </div>

            <!--CHECKBOX-->
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Estoy de acuerdo con <a href="">Reglas de Convivencia</a>.
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Marque esta casilla de verificación para continuar.</div>
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
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
        //VALIDAR QUE AMBAS CONTRASEÑAS SEAN IGUAL
        var p1 = document.getElementById("passwd").value;
        var p2 = document.getElementById("passwd2").value;

        if (p1 != p2) {
            alert("Las passwords deben de coincidir");
            return false;
        } else {
            alert("Todo esta correcto");
            return true;
        }
    </script>

</body>

</html>