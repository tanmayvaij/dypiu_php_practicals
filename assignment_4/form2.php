<?php

    $name = $_POST['name'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    setcookie("name", $name, time()+3600);
    setcookie("class", $class, time()+3600);
    setcookie("address", $address, time()+3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <form action="result.php" method="post">
        <input type="number" name="phys" placeholder="physics">
        <input type="number" name="chem" placeholder="chemistry">
        <input type="number" name="math" placeholder="maths">
        <input type="number" name="mara" placeholder="marathi">
        <input type="number" name="engl" placeholder="english">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
