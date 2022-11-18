<!-- 4. Write a PHP script to accept user name, email address and age. If data entered by the user
is valid then display it on the next page otherwise display the appropriate message(use
filter_var()). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="question_4.php" method="post">
        <input type="text" name="name"><br/>
        <input type="text" name="email"><br/>
        <input type="text" name="address"><br/>
        <input type="text" name="age"><br/>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if ( isset($_POST["submit"]) ) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $age = $_POST["age"];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo("$email is a valid email address");
            } 
            else {
                echo("$email is not a valid email address");
            }
        }
    ?>
</body>
</html>