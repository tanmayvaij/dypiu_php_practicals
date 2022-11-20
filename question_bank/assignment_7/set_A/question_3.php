<?php

    ini_set("display_errors", 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn) die("Error:- ".mysqli_connect_error());

    $sql1 = "CREATE DATABASE IF NOT EXISTS Biscuit;";
    $res1 = mysqli_query($conn, $sql1);

    if (!$res1) die("Error:- ".mysqli_error($conn));
    
    mysqli_select_db($conn, "Biscuit");

    $sql2 = "CREATE TABLE IF NOT EXISTS Parle ( p_no INT PRIMARY KEY, p_name VARCHAR(30), p_price INT);";
    $res2 = mysqli_query($conn, $sql2);

    if (!$res2) die("Error:- ".mysqli_error($conn));
    
    $sql3 = "INSERT IGNORE INTO Parle VALUES (1, 'jim_jam', 50), (2, 'goodday', 40), (3, 'bourbon', 60)";
    $res3 = mysqli_query($conn, $sql3);

    if (!$res3) die("Error:- ".mysqli_error($conn));

    $sql4 = "UPDATE Parle SET p_price=30 WHERE p_price=60";
    $res4 = mysqli_query($conn, $sql4);

    if (!$res4) die("Error:- ".mysqli_error($conn));

    echo "Value updated successfully <br/>";

?>
