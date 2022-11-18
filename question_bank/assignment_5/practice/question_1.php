<!-- 1. To design an application that works as a simple calculator using PHP. (use isset()). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="question_1.php" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operation">
            <option value="1">add</option>
            <option value="2">subtract</option>
            <option value="3">multiply</option>
            <option value="4">divide</option>
        </select>
        <input type="submit" value="SUBMIT">
    </form>

    <?php
        if ( isset($_POST["num1"]) ) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["operation"];
            switch ($op) {
                case 1:
                    $res = $num1 + $num2;
                    echo "$res <br/>";
                    break;
                case 2:
                    $res = $num1 - $num2;
                    echo "$res <br/>";
                    break;
                case 3:
                    $res = $num1 * $num2;
                    echo "$res <br/>";
                    break;
                case 4:
                    $res = $num1 / $num2;
                    echo "$res <br/>";
                    break;
            }
        }
    ?>

</body>
</html>
