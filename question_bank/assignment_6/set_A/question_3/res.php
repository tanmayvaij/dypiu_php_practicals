<?php

    if(isset($_POST["submit"])) {

        $style = $_POST["style"];
        $size = $_POST["size"];
        $color = $_POST["color"];
        $bgcolor = $_POST["bg-color"];

        setcookie("style", $style ,time() + 3600);
        setcookie("size", $size ,time() + 3600);
        setcookie("color", $color ,time() + 3600);
        setcookie("bg-color", $bgcolor ,time() + 3600);

        echo "<p> font-style:- ".$style."</p>";
        echo "<p> font-size:- ".$size."</p>";
        echo "<p> text-color:- ".$color."</p>";
        echo "<p> bg-color:- ".$bgcolor."</p>";

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
    <a href="final.php">SHOW RESULT</a>
</body>
</html>
