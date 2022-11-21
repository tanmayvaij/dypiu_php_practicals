<html>
<head>
<title>Flight Registration Form</title>
</head>
<body>
<?php
    if ($_GET['expired']) {
        echo "<script>alert('Your Session has been expired');</script>";
    }
?>
<h1>Flight Registration Form</h1>
<pre>
<h3>Enter Passenger Details:- </h3><form action="./1_2.php" method="post">
Name:
<input type="text" name="name">

Address:
<input type="text" name="address">

Birthdate:
<input type="date" name="bd">

Mobile Number:
<input type="tel" name="mn">

<button type="submit">Submit</button>
</form>
</pre>
</body>
</html> 