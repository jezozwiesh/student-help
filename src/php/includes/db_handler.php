<?php
    session_start();
    session_regenerate_id();
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'pomoc_kolezenska';
    
    $con = new mysqli($host, $username, $password, $db);
    
    $con->set_charset("utf8mb4");

    if($con->connect_error)
    {
        die("Connection error: ".$con->connect_error);
    }
?>