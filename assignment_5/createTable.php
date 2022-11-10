<?php

    ini_set('display_errors', 1);
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "mydb";

    $conn = mysqli_connect($hostname, $username, $password, $db);

    if ( !$conn ) die( "Error:- ".mysqli_connect_error()."\n" );
    
    $sql = "CREATE TABLE mytable( id INT PRIMARY KEY, name VARCHAR(25), email VARCHAR(25) );";

    $res = mysqli_query($conn, $sql);

    if (!$res) die( "Error:- ". mysqli_error($conn)."\n" );
    echo "CREATED TABLE SUCCESSFULLY \n";

?>
