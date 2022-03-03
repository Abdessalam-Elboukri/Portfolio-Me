<?php
    $servername = "localhost";
    $userrname = "root";
    $spassword = "";
    $database = "portfolio";

    $conn = new mysqli($servername, $userrname, $spassword, $database );

    if($conn->connect_error){
        die("connection failed" .$conn->connect_error);
    }
?>