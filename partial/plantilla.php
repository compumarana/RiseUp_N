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
        <a href="../views/contact.php">Contacto</a>
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

        <?php
    require_once '../models/conection.php';

    $email = $_SESSION['email'];

    $query = mysqli_query($con,"SELECT id FROM users WHERE email = '$email'");

    $result = mysqli_num_rows($query);
            if ($result >0) {               

                $data = mysqli_fetch_array($query);
            }
    ?>
        <spam style="color: #fff;"><!--<a href="updateProfile.php?id=<?php echo $data["id"]; ?>"--><?php echo $_SESSION['name']; ?></a></spam>
        <span><a href="../controllers/logout.php">Logout</a></span>
        
    </div>
    <span style="font-size:30px;cursor:pointer;" onclick="abrirNavBar()">&#9776; Abrir</span>


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