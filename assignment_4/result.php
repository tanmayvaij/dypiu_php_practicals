<?php 

    $a = $_POST['phys'];
    $b = $_POST['chem'];
    $c = $_POST['math'];
    $d = $_POST['mara'];
    $e = $_POST['engl'];

    $x = $_COOKIE['name'];
    $y = $_COOKIE['class'];
    $z = $_COOKIE['address'];

    $total = $a + $b + $c + $d + $e;

    $percentage = $total / 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <div>
        <h4>Name: <?php echo "$x" ?></h4>
        <h4>Class: <?php echo "$y" ?></h4>
        <h4>Address: <?php echo "$z" ?></h4>
        <h4>Total: <?php echo "$total" ?></h4>
        <h4>Percentage: <?php echo "$percentage"."%" ?></h4>
    </div>

    <table>
        <thead>
            <th>Subject</th>
            <th>Marks</th>
        </thead>
        <tbody>
            <tr>
                <td>Physics</td>
                <td><?php echo "$a" ?></td>
            </tr>
            <tr>
                <td>Chemistry</td>
                <td><?php echo "$b" ?></td>
            </tr>
            <tr>
                <td>Maths</td>
                <td><?php echo "$c" ?></td>
            </tr>
            <tr>
                <td>Marathi</td>
                <td><?php echo "$d" ?></td>
            </tr>
            <tr>
                <td>English</td>
                <td><?php echo "$e" ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
