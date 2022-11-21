<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Form</title>
</head>
<body>
    <?php
    if(!empty($_POST)) {
        $_COOKIE['name'] = $_POST['name'];
        $_COOKIE['address'] = $_POST['address'];
        $_COOKIE['bd'] = $_POST['bd'];
        $_COOKIE['mn'] = $_POST['mn'];
    }
    ?>
    <h1>Healthcare Form</h1>
<pre>
<h3>Enter Health Details:- </h3><form action="./2_3.php" method="post">
Medicare Number:
<input type="text" name="n">

health Fund:
<input type="text" name="f">

Critical Information:
<input type="text" name="ci">

<button type="submit">Submit</button>
</form>
</body>
</html>