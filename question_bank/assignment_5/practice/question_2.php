<!-- 2. Write a PHP script to check PAN number entered by the customer is valid or not and
display an appropriate message. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="question_2.php" method="post">
        <input type="text" name="pan_num">
        <input type="submit" value="SUBMIT">
    </form>

    <?php

        if (isset($_POST["pan_num"])) {

            $pan_num = $_POST["pan_num"];
            $regex = "/[A-Z]{5}[0-9]{4}[A-Z]{1}/";

            if ( preg_match($regex, $pan_num) == 1) {
                echo "VALID <br/>";
            }

            else {
                echo "INVALID <br/>";
            }

        }

    ?>

</body>
</html>