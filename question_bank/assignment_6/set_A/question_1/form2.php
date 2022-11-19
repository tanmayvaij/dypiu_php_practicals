<?php

    if(isset($_POST["submit"])) {

        $number = $_POST["number"];
        $name = $_POST["name"];
        $class = $_POST["class"];

        setcookie("number", $number, time()+3600);
        setcookie("name", $name, time()+3600);
        setcookie("class", $class, time()+3600);

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
    <form action="result.php" method="post">
        PHP:- <input type="number" name="m1">
        DS:- <input type="number" name="m2">
        CPP:- <input type="number" name="m3">
        RDBMS:- <input type="number" name="m4">
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>