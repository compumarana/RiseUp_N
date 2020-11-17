<a class="navbar-brand" href="index.php">RiseUp</a>

<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#">Arte</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Comics e Ilustración</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Tecnología</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Cine</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Comida</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Publicidad</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">...</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
    </li>
</ul>
<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Iniciar Sesión
        </a>
        <div class="dropdown-menu pr-4 pl-2">
            <form action="/action_page.php">
                <div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Recordar
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar</button>
                    <hr>
                    <a href="partial/registro.php">Regístrate</a>

                </div>

            </form>
        </div>
    </li>
    <li class="nav-item dropdown" hidden>
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            User Name
        </a>
        <div class="dropdown-menu pr-4 pl-2">
            <form action="/action_page.php">
                <div>
                    <div class="form-group">
                        <a href="">Mis Proyectos</a>
                    </div>
                    <div class="form-group">
                        <a href="#">Mis Favoritos</a>
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