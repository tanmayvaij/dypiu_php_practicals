<!-- 2. Write a PHP Script which will perform the Addition, Subtraction, Multiplication, and
Division of two numbers as per the choice. (Use Switch Case) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <p>Enter 1 for addition</p>
        <p>Enter 2 for subtraction</p>
        <p>Enter 3 for multiplication</p>
        <p>Enter 4 for division</p>
    </div>

    <form method="post" action="question_2.php"> 
        <input placeholder="Num 1" type="number" name="num1" >
        <input placeholder="Num 2" type="number" name="num2" >
        <input placeholder="choice" type="number" name="ch">
        <input type="submit" value="SUBMIT">
    </form>

    <div>
        <?php
            if (isset($_POST["num1"])) {

                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                switch ($_POST["ch"]) {
                    case 1:
                        $res = $num1 + $num2;
                        echo $res;
                        break;
                    case 2:
                        $res = $num1 - $num2;
                        echo $res;
                        break;
                    case 3:
                        $res = $num1 * $num2;
                        echo $res;
                        break;
                    case 4:
                        $res = $num1 / $num2;
                        echo $res;
                        break;
                    default:
                        echo "INVALID CHOICE";
                        break;
                }

            }
        ?>
    </div>

</body>
</html>
