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
<h2>Flight Registration Details</h2>
<pre>
    Passenger Details:
    Name: -  <?php echo $_SESSION['name'];?>

    Address: -  <?php echo $_SESSION['address'];?>

    Birthdate: - <?php echo $_SESSION['bd'];?>

    Mobile Number: - <?php echo $_SESSION['mn'];?>


    Flight Details:
    Flight Name: -  <?php echo $_POST['n'];?>

    Source: -  <?php echo $_POST['s'];?>

    Destination: -  <?php echo $_POST['de'];?>

    Departure: -  <?php echo $_POST['d'];?>
    
    Charges: -  <?php echo $_POST['c'];?>
</pre>
</body>
</html>