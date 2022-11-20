<?php

    ini_set("display_errors", 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn) die("Error:- ".mysqli_connect_error());

    $sql1 = "CREATE DATABASE IF NOT EXISTS Bank;";
    $res1 = mysqli_query($conn, $sql1);

    if (!$res1) die("Error:- ".mysqli_error($conn));
    
    mysqli_select_db($conn, "Bank");

    $sql2 = "CREATE TABLE IF NOT EXISTS Account ( acc_no INT, acc_type VARCHAR(30), acc_balance BIGINT);";
    $res2 = mysqli_query($conn, $sql2);

    if (!$res2) die("Error:- ".mysqli_error($conn));
    
    $sql3 = "INSERT INTO Account VALUES ( 1, 'savings_account', 500000 )";
    $res3 = mysqli_query($conn, $sql3);

    if (!$res3) die("Error:- ".mysqli_error($conn));

    echo "Data Inserted Successfully";

?>
