<?php
    if (!empty($_POST)) {
        $_COOKIE['n'] = $_POST['n'];
        $_COOKIE['d'] = $_POST['d'];
        $_COOKIE['s'] = $_POST['s'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <style>
    td{
        width: 25%;
    }
    </style>
</head>
<body>
<pre>
<h2>Highest Sold Product Detail:</h2>
<table>
<tr>
<td>product name</td><td>total quantity</td><td>total sold</td>
</tr>
<tr>
<td><?php echo $_COOKIE['hn']; ?></td>
<td><?php echo $_COOKIE['hq']; ?></td>
<td><?php echo $_COOKIE['hs']; ?></td>
</tr>
</table>

<h2>Latest Sold Product Detail:</h2>
<table>
<tr>
<td>product name</td><td>Date</td><td>Total Sale</td>
</tr>
<tr>
<td><?php echo $_COOKIE['n']; ?></td>
<td><?php echo $_COOKIE['d']; ?></td>
<td><?php echo $_COOKIE['s']; ?></td>
</tr>
</table>
</pre>
</body>
</html>