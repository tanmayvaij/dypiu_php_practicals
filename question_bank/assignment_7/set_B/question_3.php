<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "farm";
	// Connecting to SQL Database
	$dbc = mysqli_connect($server,$user,$pass);
	// Creating database if does not exists
    $dbc->query("CREATE DATABASE IF NOT EXISTS ".$db)?mysqli_select_db($dbc,$db):die("Unable to create database");

	// Creating table if does not exists
	$result = $dbc->query("SHOW TABLES LIKE 'Crop';");
	if($result->num_rows==0){
        $dbc->query('CREATE TABLE IF NOT EXISTS Crop(c_no INT(5) PRIMARY KEY, c_name CHAR(20), c_season CHAR(10), pesticides CHAR(20));');
        $dbc->query('CREATE TABLE IF NOT EXISTS Farmer(f_no INT(5) PRIMARY KEY,f_name CHAR(20), f_location CHAR(20));');
        $dbc->query('CREATE TABLE IF NOT EXISTS cf(c_no INT(5),f_no INT(5), year YEAR,FOREIGN KEY(c_no) REFERENCES Crop(c_no),FOREIGN KEY(f_no) REFERENCES Farmer(f_no));');
        $dbc->query('INSERT INTO Crop VALUES(1,"Bajra","Monsoon","Ovicides"),(2,"Jower","Monsoon","Algaecides"),(3,"Gram","Rabi","Defoliants"),(4,"Wheat","Rabi","Desiccants"),(5,"Bajra","Rabi","Algaecides"),(6,"Pumpkin","Summer","Miticides"),(7,"Cucumber","Summer","Algaecides");');
        $dbc->query('INSERT INTO Farmer VALUES(1,"John","Surat"),(2,"Jack","Varanasi"),(3,"Adam","Pochinki"),(4,"Sarah","Georgepool"),(5,"Elliot","Mumbai");');
        $dbc->query('INSERT INTO cf VALUES(1,2,2019),(1,4,2022),(1,5,2021),(2,1,2020),(2,2,2019),(2,4,2021),(3,3,2021),(3,4,2022),(3,5,2021),(4,1,2020),(4,2,2019),(4,4,2019),(4,5,2020),(5,1,2021),(5,2,2020),(5,4,2021),(6,2,2022),(6,4,2019),(6,5,2020),(7,1,2022),(7,2,2021),(7,3,2022);');
    }
?>
    <html>
    <head>
    <title>Farms Database</title>
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
    <h2> Farms Database </h2>
    <pre>
    <?php if(!empty($_POST)){
        $crop = $_POST["crop"];
        $year = $_POST["year"];
    ?>
    <table>
        <tr>
        <td></td>
        </tr>
        <tr>
        <td>Crop name</td>
        <td>Year</td>
        <td>Total farmers</td>
        </tr>

        <?php
            if($result=$dbc->query("SELECT c_name,year,sum(f_no) as total_farmers FROM Crop NATURAL JOIN cf WHERE year=$year AND c_name='$crop';")){
                while($row=$result->fetch_row()){
        ?>
        <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
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
    <form action="./3.php" method="post">
    Select Crop:-<select name="crop">
        <option value="Bajra">Bajra</option>
        <option value="Jower">Jower</option>
        <option value="Gram">Gram</option>
        <option value="Wheat">Wheat</option>
        <option value="Corn">Corn</option>
        <option value="Pumpkin">Pumpkin</option>
        <option value="Cucumber">Cucumber</option>
    </select>

    Select Year:-<select name="year">
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
    </select>

    <input type="submit" value="Check">
    </form>
    <?php }?>
    </pre>
    </body>
    </html>