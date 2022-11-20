<?php

    ini_set("display_errors", 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn) die("Error:- ".mysqli_connect_error());

    $sql1 = "CREATE DATABASE IF NOT EXISTS Company;";
    $res1 = mysqli_query($conn, $sql1);

    if (!$res1) die("Error:- ".mysqli_error($conn));
    
    mysqli_select_db($conn, "Company");

    $sql2 = "CREATE TABLE IF NOT EXISTS Employee ( eno INT, ename VARCHAR(50), address VARCHAR(255) , join_date VARCHAR(15), salary BIGINT);";
    $res2 = mysqli_query($conn, $sql2);

    if (!$res2) die("Error:- ".mysqli_error($conn));
    echo "Table Employee created successfully <br/>";

?>
