<?php

    ini_set('display_errors', 1);

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "mydb";

    $conn = mysqli_connect($hostname, $username, $password, $db);

    if ( !$conn ) die( "Error:- ".mysqli_connect_error()."\n" );
    
    $sql = "
    INSERT INTO `mytable` VALUES 
    ('1', 'tanmayvaij', 'tanmayvaij22@gmail.com'),
    ('2', 'tejasvaij', 'tejasvaij23@gmail.com');
    ";

    $res = mysqli_query($conn, $sql);

    if (!$res) die( "Error:- ". mysqli_error($conn)."\n" );
    echo "INSERTED DATA SUCCESSFULLY \n";

?>
