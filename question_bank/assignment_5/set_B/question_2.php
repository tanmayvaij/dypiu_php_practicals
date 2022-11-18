<!-- 2. Write HTML code to design multiple choice question paper for PHP subject. Display
question wise marks and total marks received by the student in table format. -->

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
        <div>
            <p>What is the capital of India ?</p>
            <input type="radio" value="1" name="q1"> Delhi
            <input type="radio" value="0" name="q1"> Kolkata
            <input type="radio" value="0" name="q1"> Pune
            <input type="radio" value="0" name="q1"> Banglore
        </div>
        <div>
            <p>What is the capital of Maharahtra ?</p>
            <input type="radio" value="1" name="q2"> Mumbai
            <input type="radio" value="0" name="q2"> Pune
            <input type="radio" value="0" name="q2"> Nashik
            <input type="radio" value="0" name="q2"> Kolhapur
        </div>
        <div>
            <p>What is the capital of Karnataka ?</p>
            <input type="radio" value="1" name="q3"> Banglore
            <input type="radio" value="0" name="q3"> Belgaon
            <input type="radio" value="0" name="q3"> Nipani
            <input type="radio" value="0" name="q3"> Udupi
        </div>
        <div>
            <input type="submit" value="SUBMIT" name="submit">
        </div>
    </form>
    <?php
        if (isset($_POST["submit"])) {

            $val1 = (int) $_POST["q1"];
            $val2 = (int) $_POST["q2"];
            $val3 = (int) $_POST["q3"];

            $total = $val1 + $val2 + $val3;

            echo $total;
        }
    ?>
</body>
</html>