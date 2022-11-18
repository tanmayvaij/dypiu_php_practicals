<!-- 3. Write a PHP script to check mobile number entered by the user is valid or not and
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
    <form action="question_3.php" method="post">
        <input type="number" name="number">
        <input type="submit" value="SUBMIT">
    </form>
    <?php
        if ( isset($_POST["number"]) ) {
            $num = $_POST["number"];
            if (preg_match("/[0-9]{10}/", $num) == 1){
                echo "VALID <br/>";
            }
            else {
                echo "INVALID <br/>";
            }
        }
    ?>
</body>
</html>