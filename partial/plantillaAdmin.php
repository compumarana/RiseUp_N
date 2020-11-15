<?php

    session_start();
    if (empty($_SESSION['active'])) {
        header('location : ../controllers/login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/js/fuctions.js">
    <title>Document</title>
</head>

<body>


    <header>
        <a href="#">Rise Up</a>
        <p>Barranquilla, Colombia <?php echo dat() ?></p>
    </header>



    <div id="navBar" class="estiloNavBar">
        <a href="javascript:void(0)" class="btnCerrar" onclick="cerrarNavBar()">&times;</a>
        
        <a href="../views/home.php">Home</a>
        <a href="../views/aboutUs.php">About Us</a>
        <a href="../views/projectList.php">Projects</a>
        <a href="../views/userList.php">Users</a>
        <a href="../views/contact.php">Contact</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <spam style="color: #fff;"><?php echo $_SESSION['name']; ?></spam>
        <span><a href="../controllers/logout.php">Logout</a></span>
        
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="abrirNavBar()">&#9776; Abrir</span>


    <?php

    date_default_timezone_set('America/Bogota');

    function dat(){
        $month = array("",  "January", 
                            "February",
                            "March", 
                            "April", 
                            "May", 
                            "June", 
                            "July", 
                            "August", 
                            "September", 
                            "october",
                            "November",
                            "December");

        return date('d')."th " . $month[date('n')] . " " . date('Y');
    }

?>

</body>

</html>