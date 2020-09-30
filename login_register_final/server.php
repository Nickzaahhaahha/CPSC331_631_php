<?php 

    $servername = "localhost";
    $username = "gadioslnwm_nick";
    $password = "D8W67WAk-m";
    $dbname = "gadioslnwm_login";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>