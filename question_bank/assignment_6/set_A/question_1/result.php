<?php

    if(isset($_POST["submit"])) {

        $m1 = $_POST["m1"];
        $m2 = $_POST["m2"];
        $m3 = $_POST["m3"];
        $m4 = $_POST["m4"];

        $total = $m1 + $m2 + $m3 + $m4;

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
    <p><?php echo $_COOKIE["number"] ?></p>
    <p><?php echo $_COOKIE["name"] ?></p>
    <p><?php echo $_COOKIE["class"] ?></p>
    <p><?php echo $m1 ?></p>
    <p><?php echo $m2 ?></p>
    <p><?php echo $m3 ?></p>
    <p><?php echo $m4 ?></p>
    <p><?php echo $total ?></p>
</body>
</html>