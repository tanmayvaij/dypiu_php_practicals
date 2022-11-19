<?php

    session_start();

    $sys_username = "tanmayvaij";
    $sys_password = "hello";

    if( isset($_POST["submit"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (($username==$sys_username) && ($password==$sys_password)) {
            echo "Welcome <br/>";
        }

        else{

            if (!isset($_SESSION["attempt"])) $_SESSION["attempt"] = 1;

            else {

                $_SESSION["attempt"]++;
                
                if ( $_SESSION["attempt"] == 3 ) {
                    echo "3 incorrect attempts";
                    $_SESSION["attempt"] = 0;
                }

            }

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>