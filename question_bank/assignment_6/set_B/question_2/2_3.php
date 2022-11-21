<?php
        session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Implementation</title>
</head>
<body>
<h2>Patient Healthcare Details</h2>
<pre>
    Patient Details:
    Name: -  <?php echo $_SESSION['name'];?>

    Address: -  <?php echo $_SESSION['address'];?>

    Birthdate: - <?php echo $_SESSION['bd'];?>

    Mobile Number: - <?php echo $_SESSION['mn'];?>


    Health Details:
    Medicare Number: -  <?php echo $_POST['n'];?>

    Health Fund: -  <?php echo $_POST['f'];?>

    Critical Information: -  <?php echo $_POST['ci'];?>
</pre>
</body>
</html>