<!-- 1. Write a PHP Script to calculate the total cost of AIR Ticket Reservation and display the
details for Name, Address, Contact No, Source, Destination, Date of journey, Gender of
passenger, No of Persons, Price per Ticket, etc. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIR TICKET RESERVATION</title>
</head>
<body>
    <form action="index.php" method="post">
        <input placeholder="Name" type="text" name="name" ><br/>
        <input placeholder="Address" type="text" name="address" ><br/>
        <input placeholder="Contact No" type="text" name="number" ><br/>
        <input placeholder="Source" type="text" name="source" ><br/>
        <input placeholder="Destination" type="text" name="destination" ><br/>
        <input type="date" name="date" ><br/>
        <div>
            <span>Male</span>
            <input value="male" type="radio" name="gender">
            <span>Female</span>
            <input value="female" type="radio" name="gender">
        </div>
        <input placeholder="persons" type="number" name="persons" >
        <input type="submit" value="SUBMIT">
    </form>

    <?php 

        if (isset($_POST["persons"])) {

            $name = $_POST["name"];
            $address = $_POST["address"];
            $number = $_POST["number"];
            $source = $_POST["source"];
            $destination = $_POST["destination"];
            $date = $_POST["date"];
            $gender = $_POST["gender"];
            $persons = $_POST["persons"];

            $total = 2500 * (int) $persons;
    
            echo "name:- $name <br/>";
            echo "address:- $address <br/>";
            echo "contact no:- $number <br/>";
            echo "source:- $source <br/>";
            echo "destination:- $destination <br/>";
            echo "gender:- $gender <br/>";
            echo "no of persons:- $persons <br/>";
            echo "total:- $total <br/>";

        }

    ?>

</body>
</html>
