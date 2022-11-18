<!-- 1. Write a PHP script to accept font name, background color, and welcome message on 1st
page. Display the welcome message with the given font and background color on the next
page. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div style="background-color: ;"></div>
</head>
<body>
    <form action="question_1.php" method="post">
        <input type="text" name="msg">
        <input type="text" name="bg">
        <input type="submit" name="btn" value="SUBMIT">
    </form>
    <?php
        if ( isset($_POST["btn"]) ) {
            $msg = $_POST["msg"];
            $bg = $_POST["bg"];
            echo "
                <div style=\"background-color: $bg;\"> $msg </div>
            ";
        }
    ?>
</body>
</html>