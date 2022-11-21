<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "policies";
	// Connecting to SQL Database
	$dbc = mysqli_connect($server,$user,$pass);
	// Creating database if does not exists
    $dbc->query("CREATE DATABASE IF NOT EXISTS ".$db)?mysqli_select_db($dbc,$db):die("Unable to create database");

	// Creating table if does not exists
	$result = $dbc->query("SHOW TABLES LIKE 'Client';");
	if($result->num_rows==0){
        $dbc->query('CREATE TABLE IF NOT EXISTS Client(c_no INT(5) PRIMARY KEY,c_name CHAR(20),c_addr CHAR(20),birth_date DATE);');
        $dbc->query('CREATE TABLE IF NOT EXISTS Policy_info(p_no INT(5) PRIMARY KEY,p_name CHAR(20),maturity_amt INT(10),prem_amt INT(10), policy_term CHAR(20));');
        $dbc->query('CREATE TABLE IF NOT EXISTS cp(c_no INT(5),p_no INT(5),date_of_purchase DATE, FOREIGN KEY(c_no) REFERENCES Client(c_no), FOREIGN KEY(p_no) REFERENCES Policy_info(p_no));');
        $dbc->query('INSERT INTO Client VALUES(1,"John","Surat",19651212),(2,"Jack","Varanasi",19540407),(3,"Adam","Pochinki",19600229),(4,"Sarah","Georgepool",20181114),(5,"Elliot","Mumbai",20220102);');
        $dbc->query('INSERT INTO Policy_info VALUES(1,"FPL",12000,5000,"1 year"),(2,"SNP",17000,6500,"2 year"),(3,"KSC",16000,4000,"1 year"),(4,"Kupl",28000,7000,"3 year"),(5,"LCC",36000,12000,"2 year"),(6,"AMN",30000,8000,"1 year");');
        $dbc->query('INSERT INTO cp VALUES(1,3,20210809),(1,4,20220107),(1,6,20201107),(2,1,20200109),(2,2,20210921),(2,5,20221124),(3,2,20201019),(3,4,20201119),(3,5,20210930),(3,6,20220502),(4,1,20211109),(4,2,20220617),(4,3,20200405),(5,3,20210109),(5,4,20200203),(5,6,20220202);');
    }
?>
    <html>
    <head>
    <title>Policies Database</title>
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
    <h2> Policies Database </h2>
    <pre>
    <?php if(!empty($_POST)){
        $cn = $_POST["client"];
        $year = $_POST["year"];
    ?>
    <table>
        <tr>
        <td></td>
        </tr>
        <tr>
        <td nowrap>Client Name: <?php echo $cn;?></td>
        <td nowrap>Year: <?php echo $year;?></td>
        </tr>
        <tr>
        <td>Policy Name</td>
        <td>Maturity Amount</td>
        <td>Premium Amount</td>
        <td>Policy Term</td>
        <td>Date of Purchase</td>
        </tr>
        <?php
            if($result=$dbc->query("SELECT * FROM Client NATURAL JOIN cp NATURAL JOIN Policy_info WHERE c_name='$cn' AND date_of_purchase like '$year%';")){
                while($row=$result->fetch_row()){
        ?>
        <tr>
        <td><?php echo $row[6];?></td>
        <td><?php echo $row[7];?></td>
        <td><?php echo $row[8];?></td>
        <td><?php echo $row[9];?></td>
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
    <form action="./1.php" method="post">
    Select Client:-<select name="client">
        <option value="John">John</option>
        <option value="Jack">Jack</option>
        <option value="Adam">Adam</option>
        <option value="Sarah">Sarah</option>
        <option value="Elliot">Elliot</option>
    </select>

    Select Year:-<select name="year">
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
    </select>

    <input type="submit" value="Check">
    </form>
    <?php }?>
    </pre>
    </body>
    </html>






