<?php

    if ( isset($_POST["submit"]) ) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $mode = $_POST["mode"];

        setcookie("name", $name, time()+3600);
        setcookie("email", $email, time()+3600);
        setcookie("address", $address, time()+3600);
        setcookie("mode", $mode, time()+3600);

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
        <select name="p1">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="peach">peach</option>
        </select>
        <input type="number" name="n1">
        <select name="p2">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="peach">peach</option>
        </select>
        <input type="number" name="n2">
        <select name="p3">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="peach">peach</option>
        </select>
        <input type="number" name="n3">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
