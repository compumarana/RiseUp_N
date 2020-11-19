<a class="navbar-brand" href="/RiseUp_N/index.php"><img src="/RiseUp_N/img/RiseUpRT.png" class="img-fluid mx-auto d-block" width="20" height="20" alt="RiseUp"></a>

<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=1">Arte</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=2">Comics e Ilustración</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=3">Tecnología</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=4">Cine</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=5">Comida</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/RiseUp_N/views/category.php?id=6">Publicidad</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
    </li>
</ul>
<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    <li class="nav-item dropleft">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Iniciar Sesión
        </a>
        <div class="dropdown-menu pr-4 pl-4" style="width: 200px;">
            <form action="/action_page.php">
                <div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Recordar
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar</button>
                    <hr>

                    <a class="dropdown-item" href="views/signup.php">Regístrate</a>

                    <br>
                </div>

            </form>
        </div>

    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Nombre de Usuario
        </a>
        <div class="dropdown-menu pr-4 pl-2">
            <form action="/action_page.php">
                <div>
                    <div>
                        <img src="/RiseUp_N/img/RiseUpRT.png" class="img-fluid mx-auto d-block" width="20" height="20" alt="RiseUp">
                    </div>
                    <hr>
                    <div class="form-group">
                        <a href="views/editUser.php">Editar Usuario</a>
                    </div>

                    <div class="form-group">
                        <a href="views/favorites.php">Mis Favoritos</a>
                    </div>
                    <hr>
                    <div class="form-group">
                        <a href="#">Cerrar Sesión</a>
                    </div>
                </div>

            </form>
        </div>
    </li>
</ul>