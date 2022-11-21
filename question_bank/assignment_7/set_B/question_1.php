<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "projects";
	// Connecting to SQL Database
	$dbc = mysqli_connect($server,$user,$pass);
	// Creating database if does not exists
    $dbc->query("CREATE DATABASE IF NOT EXISTS ".$db)?mysqli_select_db($dbc,$db):die("Unable to create database");

	// Creating table if does not exists
	$result = $dbc->query("SHOW TABLES LIKE 'Employee';");
	if($result->num_rows==0){
        $dbc->query('CREATE TABLE IF NOT EXISTS Employee(eno INT(10) PRIMARY KEY, ename CHAR(20), sal INT(10));');
        $dbc->query('CREATE TABLE IF NOT EXISTS Project(pno INT(10) PRIMARY KEY, pname CHAR(20), duration CHAR(20));');
        $dbc->query('CREATE TABLE IF NOT EXISTS ep(eno INT(10),pno INT(10), FOREIGN KEY(eno) REFERENCES Employee(eno),FOREIGN KEY(pno) REFERENCES Project(pno));');
        $dbc->query('INSERT INTO Employee VALUES(1,"John Smith",250000),(2,"Jacky Chan",170000),(3,"Adam",10000000),(4,"Sara",1500000),(5,"Elliot",999999999);');
        $dbc->query('INSERT INTO Project VALUES(1,"I_Love_You Virus_3.0","2 Months"),(2,"Wanna_Cry_V3.2","6 Months"),(3,"Pegasus 4U Beta","3 Months"),(4,"Exam Study","Few Minutes");');
        $dbc->query('INSERT INTO ep VALUES(1,3),(1,4),(2,2),(2,4),(3,1),(3,2),(3,4),(4,1),(4,2),(5,1),(5,2),(5,3),(5,4);');
    }
?>
    <html>
    <head>
    <title>Projects Database</title>
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
    <h2> Projects Database </h2>
    <pre>
    <?php if(!empty($_POST)){
        $pname = $_POST["pname"];
    ?>
    <table>
        <tr>
        <td>Project Details</td>
        </tr>
        <tr>
        <td>Project Name</td>
        <td>Duration</td>
        <td>Employee Name</td>
        <td>Salary</td>
        </tr>

        <?php
            if($result=$dbc->query("SELECT * FROM Project NATURAL JOIN ep NATURAL JOIN Employee WHERE pname='$pname';")){
                while($row=$result->fetch_row()){
        ?>
        <tr>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
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
    <h3>Choose Project to View Details</h3>
    <form action="./1.php" method="post">
    Select Project:-
    <select name="pname">
        <option value="I_Love_You Virus_3.0">I_Love_You Virus_3.0</option>
        <option value="Wanna_Cry_V3.2">Wanna_Cry_V3.2</option>
        <option value="Pegasus 4U Beta">Pegasus 4U Beta</option>
        <option value="Exam Study">Exam Study</option>
    </select>
    <input type="submit" value="See">
    </form>
    <?php }?>
    </pre>
    </body>
    </html>