<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "riseup";

    $con = mysqli_connect($server, $user, $pass, $db) or die(mysqli_error("error"));
?>