<?php

    ini_set("display_errors", 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "Travel";

    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn) die("Error:- ".mysqli_connect_error());

    $createDatabase = "CREATE DATABASE IF NOT EXISTS $db;";
    $res = mysqli_query($conn, $createDatabase);
    if (!$res) die("Error:- ".mysqli_error($conn));
    
    mysqli_select_db($conn, $db);

    $createCustomerTable = "CREATE TABLE IF NOT EXISTS Customer ( c_no INT PRIMARY KEY, c_name VARCHAR(30), c_city VARCHAR(30), c_ph_no BIGINT);";
    $res = mysqli_query($conn, $createCustomerTable);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $createTicketTable = "CREATE TABLE IF NOT EXISTS Ticket ( t_no INT PRIMARY KEY, booking_date VARCHAR(30), fare INT, traveling_date VARCHAR(30));";
    $res = mysqli_query($conn, $createTicketTable);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $createCT = "CREATE TABLE IF NOT EXISTS CT ( c_no INT , t_no INT );";
    $res = mysqli_query($conn, $createCT);
    if (!$res) die("Error:- ".mysqli_error($conn));
    
    $insertCustomerData = "INSERT IGNORE INTO Customer VALUES 
    ( 101, 'tanmay', 'Pune', 8408882079 ), 
    ( 102, 'tejas', 'Pune', 7666674367 ), 
    ( 103, 'viraj', 'Pune', 7508881089 ), 
    ( 104, 'parth', 'Pune', 8999904078 ), 
    ( 105, 'sandeep', 'Boston', 7000064034 )";
    $res = mysqli_query($conn, $insertCustomerData);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $insertTicketData = "INSERT IGNORE INTO Ticket VALUES 
    ( 201, '10-10-2020', 2000, '23-12-2020' ), 
    ( 202, '10-12-2020', 5000, '05-12-2020' ),  
    ( 203, '10-10-2020', 5500, '20-12-2020' ), 
    ( 204, '02-06-2020', 6000, '30-12-2020' ), 
    ( 205, '10-10-2020', 1000, '23-12-2020' );";
    $res = mysqli_query($conn, $insertTicketData);
    if (!$res) die("Error:- ".mysqli_error($conn));

    $insertCTData = "INSERT IGNORE INTO CT VALUES 
    ( 101, 201 ), 
    ( 102, 202 ), 
    ( 103, 203 ), 
    ( 104, 204 ), 
    ( 105, 205 )";
    $res = mysqli_query($conn, $insertCTData);
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

    <?php

        $fetchData1 = "SELECT SUM(fare) from Ticket WHERE booking_date='10-10-2020';";

        if ( $result = mysqli_query($conn, $fetchData1) ) echo $result->fetch_row()[0];
            
    ?>

    <table>

        <thead>
            <th>Customer Name</th>
            <th>Booking Date</th>
            <th>Fare</th>
            <th>Traveling Date</th>
        </thead>

        <tbody>

        <?php

            $fetchData2 = "SELECT DISTINCT c_name, booking_date, fare, traveling_date FROM CT NATURAL JOIN Customer NATURAL JOIN Ticket;";

            if ( $result = mysqli_query($conn, $fetchData2) ) {
                while ( $row = $result->fetch_assoc() ) {
                    echo "<tr>";
                    echo "<td>".$row["c_name"]."</td>";
                    echo "<td>".$row["booking_date"]."</td>";
                    echo "<td>".$row["fare"]."</td>";
                    echo "<td>".$row["traveling_date"]."</td>";
                    echo "</tr>";
                }
            }
            
        ?>

        </tbody>

    </table>

</body>
</html>
