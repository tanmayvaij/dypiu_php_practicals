<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "travel";
	// Connecting to SQL Database
	$dbc = mysqli_connect($server,$user,$pass);
	// Creating database if does not exists
    $dbc->query("CREATE DATABASE IF NOT EXISTS ".$db)?mysqli_select_db($dbc,$db):die("Unable to create database");

	// Creating table if does not exists
	$result = $dbc->query("SHOW TABLES LIKE 'Train';");
	if($result->num_rows==0){
        $dbc->query('CREATE TABLE IF NOT EXISTS Train(t_no INT(5) PRIMARY KEY, t_name CHAR(20));');
        $dbc->query('CREATE TABLE IF NOT EXISTS Passenger(p_no INT(5) PRIMARY KEY,p_name CHAR(20),addr CHAR(30),age INT(5));');
        $dbc->query('CREATE TABLE IF NOT EXISTS tp(t_no INT(5), p_no INT(5), date DATE, seat_no INT(5), amt INT(10), FOREIGN KEY(t_no) REFERENCES Train(t_no), FOREIGN KEY(p_no) REFERENCES Passenger(p_no));');
        $dbc->query('INSERT INTO Train VALUES(1,"Chennai Express"),(2,"Kolkata Express"),(3,"Banglore Express"),(4,"Pune Passenger"),(5,"Mumbai Express");');
        $dbc->query('INSERT INTO Passenger VALUES(1,"John Smith","Surat",57),(2,"Jacky Chan","Varanasi",68),(3,"Adam","Pochinki",62),(4,"Sarah","Georgepool",4),(5,"Elliot","Mumbai",20);');
        $dbc->query('INSERT INTO tp VALUES(1,1,20221117,23,300),(1,3,20221118,54,340),(1,5,20221118,63,330),(2,2,20221117,91,290),(2,3,20221119,23,540),(2,5,20221118,11,800),(3,1,20221117,54,590),(3,4,20221119,34,450),(3,5,20221117,11,760),(4,1,20221118,22,870),(4,2,20221119,54,120),(4,4,20221118,34,450),(5,1,20221119,97,900),(5,2,20221119,37,690),(5,3,20221118,38,880),(5,5,20221117,87,350);');

    }
?>
    <html>
    <head>
    <title>Travel Database</title>
    <style>
        td{
            width: 25%;
        }
        table{
            border: solid 2px black;
        }
    </style>
    </head>
    <body>
    <pre>
    <h1> Travel Database </h1>
    <?php if(!empty($_POST)){
        $date = str_replace('-','',$_POST["date"]);
    ?>
    <table>
        <tr>
        <td>Travel Details</td>
        </tr>
        <tr>
        <td>Train No</td>
        <td>Train Name</td>
        <td>Date</td>
        <td>Max Passenger</td>
        </tr>

        <?php
            if($result=$dbc->query("SELECT *,count(p_no) as max_passenger FROM Train NATURAL JOIN tp WHERE date=$date GROUP BY t_no;")){
                while($row=$result->fetch_row()){
        ?>
        <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[6];?></td>
        </tr>
        <?php
                }
            }
            // closing curly braces for previous unclosed blocks
        ?>
    </table>
    <?php }?>
    <?php if(empty($_POST)){
    ?>
    <h1>Enter Date to Train Details</h1>
    <form action="./2.php" method="post">
    Select Date: - <input type="date" name="date">
    <input type="submit" value="check">
    </form>
    <?php }?>
    </pre>
    </body>
    </html>