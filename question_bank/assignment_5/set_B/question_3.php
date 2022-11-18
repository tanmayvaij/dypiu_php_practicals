<!-- 3. Write a PHP script to accept student name and list of programming languages (using drop
down box) and display it on the next page in the proper format. -->

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
        <input type="text" name="user">
        <select name="val1">
            <option value=""></option>
            <option value="python">Python</option>
            <option value="javascript">Javascript</option>
            <option value="cpp">C++</option>
        </select>
        <select name="val2">
            <option value=""></option>
            <option value="python">Python</option>
            <option value="javascript">Javascript</option>
            <option value="cpp">C++</option>
        </select>
        <select name="val3">
            <option value=""></option>
            <option value="python">Python</option>
            <option value="javascript">Javascript</option>
            <option value="cpp">C++</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if (isset($_POST["submit"])) {

            $user = $_POST["user"];
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $val3 = $_POST["val3"];

            echo "$user <br/>";
            echo "$val1 <br/>";
            echo "$val2 <br/>";
            echo "$val3 <br/>";

        }
    ?>
</body>
</html>
