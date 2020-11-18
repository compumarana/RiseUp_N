<!DOCTYPE html>
<html lang="en">

<head>
    <title>RiseUp - Editar Usuario</title>
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
        <h2>Editar Usuario</h2>
        <form action="" method="post" class="needs-validation" novalidate id="formCheckPassword">
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
            
            <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <br>
        <br>
    </div>
</body>

</html>