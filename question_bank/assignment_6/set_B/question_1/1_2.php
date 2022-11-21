<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Details Form</title>
</head>
<body>
    <?php
    session_start();
    if(!empty($_POST)) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['bd'] = $_POST['bd'];
        $_SESSION['mn'] = $_POST['mn'];
    }
    elseif (empty($_SESSION)) {
        header("Location: ./1_1.php?expired=1");
    }

    if(empty($_SESSION["login_time"])){
        $_SESSION["login_time"]=time();
    }
    else if(time()-$_SESSION["login_time"] >60) 
    {
        session_unset();
        session_destroy();
        header("Location: ./1_1.php?expired=1");
    }
    ?>
    <h1>Flight Registration Form</h1>
<pre>
<h3>Enter Flight Details:- </h3><form action="./1_3.php" method="post">
Flight Name:
<input type="text" name="n">

Source:
<input type="text" name="s">

Destination:
<input type="text" name="de">

Departure:
<input type="datetime" name="d">

Charges:
<input type="tel" name="c">

<button type="submit">Submit</button>
</form>
</body>
</html>