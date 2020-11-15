<!DOCTYPE html>
<html lang="en">


<header>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">RiseUp</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="views/categorias.php?id=1">Arte</a></li>
                <li><a href="views/categorias.php">Comics e Ilustración</a></li>
                <li><a href="#">Tecnología</a></li>
                <li><a href="#">Cine</a></li>
                <li><a href="#">Comida</a></li>
                <li><a href="#">Publicidad</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">Acerca de</a></li>
            </ul>
            <!--form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="views/signup.php"><span class="glyphicon glyphicon-user"></span> Regístrate </a></li>
                <li>

                    <a class="" type="button" data-toggle="dropdown"> Iniciar Sesion
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <div class="container-fluid">
                            <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input class="form-control" type="email" name="email" require placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input class="form-control" type="password" name="pass" require placeholder="Enter your password">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary" name="send" value="send">Submit</button>
                            </form>
                        </div>
                    </ul>
                </li>
        </div>





        </li>
        </ul>
        </div>
    </nav>

</header>

</html>