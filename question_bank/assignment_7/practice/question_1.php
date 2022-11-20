<?php

    ini_set("display_errors", 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn) die("Error:- ".mysqli_connect_error());

    $createDatabase = "CREATE DATABASE IF NOT EXISTS shareMarket;";
    $res = mysqli_query($conn, $createDatabase);
    if (!$res) die("Error:- ".mysqli_error($conn));
    
    mysqli_select_db($conn, "shareMarket");

    $createCompanyTable = "CREATE TABLE IF NOT EXISTS Company ( c_no INT PRIMARY KEY, c_name VARCHAR(30), c_city VARCHAR(30), c_share_value INT);";
    $res = mysqli_query($conn, $createCompanyTable);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $createPersonTable = "CREATE TABLE IF NOT EXISTS Person ( p_no INT PRIMARY KEY, p_name VARCHAR(30), p_city VARCHAR(30), p_ph_no BIGINT);";
    $res = mysqli_query($conn, $createPersonTable);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $createPC = "CREATE TABLE IF NOT EXISTS PC ( p_no INT , c_no INT , no_of_shares INT );";
    $res = mysqli_query($conn, $createPC);
    if (!$res) die("Error:- ".mysqli_error($conn));
    
    $insertCompanyData = "INSERT IGNORE INTO Company VALUES 
    ( 101, 'WNS', 'Pune', 100 ), 
    ( 102, 'Captia', 'Pune', 150 ), 
    ( 103, 'Infosys', 'Pune', 200 ), 
    ( 104, 'Uber', 'Mumbai', 50 ), 
    ( 105, 'Innowise', 'Boston', 70 )";
    $res = mysqli_query($conn, $insertCompanyData);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $insertPersonData = "INSERT IGNORE INTO Person VALUES 
    ( 201, 'tanmay', 'Pune', 8408882079 ), 
    ( 202, 'tejas', 'Pune', 7666674367 ), 
    ( 203, 'viraj', 'Pune', 7508881089 ), 
    ( 204, 'parth', 'Pune', 8999904078 ), 
    ( 205, 'sandeep', 'Boston', 7000064034 )";
    $res = mysqli_query($conn, $insertPersonData);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $insertPCData = "INSERT IGNORE INTO PC VALUES 
    ( 201, 101, 400 ), 
    ( 201, 105, 300 ), 
    ( 202, 101, 100 ), 
    ( 202, 102, 100 ), 
    ( 202, 103, 100 ),
    ( 203, 104, 300 ),
    ( 203, 105, 300 ),
    ( 204, 103, 800 ),
    ( 205, 103, 200 ),
    ( 205, 104, 250 )";
    $res = mysqli_query($conn, $insertPCData);
    if (!$res) die("Error:- ".mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        table, th, td {
            border: 1px solid black;
        }

    </style>

</head>

<body>

    <table>

        <thead>
            <th>Person Name</th>
            <th>Company Name</th>
            <th>No of shares</th>
        </thead>

        <tbody>

        <?php

            $fetchData = "SELECT DISTINCT p_name, c_name, c_share_value FROM PC NATURAL JOIN Person NATURAL JOIN Company;";

            if ( $result = mysqli_query($conn, $fetchData) ) {
                while ( $row = $result->fetch_assoc() ) {
                    echo "<tr>";
                    echo "<td>".$row["p_name"]."</td>";
                    echo "<td>".$row["c_name"]."</td>";
                    echo "<td>".$row["c_share_value"]."</td>";
                    echo "</tr>";
                }
            }
            
        ?>

        </tbody>

    </table>

</body>
</html>
