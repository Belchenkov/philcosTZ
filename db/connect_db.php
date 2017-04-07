<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "philcos";


    // Connect to MySQL
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    mysqli_set_charset($conn, 'utf8');

    // Test Connection
    if(mysqli_connect_errno()){
        echo 'DB Connection Error: '.mysqli_connect_error();
    }


