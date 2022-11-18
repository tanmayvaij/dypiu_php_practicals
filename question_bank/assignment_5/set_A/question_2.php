<!-- 2. Write a PHP program to accept name, address, pincode, gender information. If any field
is blank display error messages “all fields are required”. -->

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
        <input type="text" name="name"><br/>
        <input type="text" name="address"><br/>
        <input type="text" name="pincode"><br/>
        <div>
            <span>Male</span>
            <input type="radio" checked value="" name="gender">
            <span>Female</span>
            <input type="radio" value="" name="gender">
        </div>
        <input type="submit" name="btn" value="SUBMIT">
    </form>
    <?php
        if ( isset($_POST["btn"]) ) {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $pincode = $_POST["name"];
            $gender = $_POST["gender"];
            if ( $name == "" || $address == "" || $pincode == "" || $gender == "" ) {
                echo "All fields are required";
            }
        }
    ?>
</body>
</html>