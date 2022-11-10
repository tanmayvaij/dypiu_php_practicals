<?php

    ini_set('display_errors', 1);
    
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password);

    if ( !$conn ) die( "Error:- ".mysqli_connect_error()."\n" );
    
    $sql = "CREATE DATABASE mydb;";

    $res = mysqli_query($conn, $sql);

    if (!$res) die( "Error:- ". mysqli_error($conn)."\n" );
    echo "CREATED DATABASE SUCCESSFULLY \n";

?>
