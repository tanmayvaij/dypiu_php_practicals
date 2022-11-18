<!-- 1. Write a PHP script to accept customer name and the list of product and quantity on the
first page. On the next page display the name of the customer, name of the products, rate
of the product, quantity, and total price in table format. -->


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
        <input type="text" name="user">
        <select name="val1">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="orange">orange</option>
        </select>
        <input type="number" name="num1">
        <select name="val2">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="orange">orange</option>
        </select>
        <input type="number" name="num2">
        <select name="val3">
            <option value=""></option>
            <option value="mango">mango</option>
            <option value="banana">banana</option>
            <option value="orange">orange</option>
        </select>
        <input type="number" name="num3">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php

        $prices = array(
            "mango" => 30,
            "banana" => 40,
            "orange" => 15
        );

        if (isset($_POST["submit"])) {

            $user = $_POST["user"];

            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $val3 = $_POST["val3"];

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            $total = ($prices[$val1]*$num1) + ($prices[$val2]*$num2) + ($prices[$val3]*$num3);

            echo "$total <br/>";

        }
    ?>

</body>

</html>
