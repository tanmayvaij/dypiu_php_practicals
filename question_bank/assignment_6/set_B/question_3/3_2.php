<?php
    if (!empty($_POST)){
        setcookie('hn',$_POST['name'],time()+3600);
        setcookie('hq',$_POST['quantity'],time()+3600);
        setcookie('hs',$_POST['sold'],time()+3600);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
</head>
<body>
<pre>
    Enter The Latest Sold Product Details: - <form action="./3_3.php" method="post">
    Product Name:
    <input type="text" name="n">

    Date:
    <input type="date" name="d">

    Total Sale:
    <input type="text" name="s">

    <input type="submit" value="submit">
    </form>
</pre>
</body>
</html>