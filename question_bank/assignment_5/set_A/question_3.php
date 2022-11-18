<!-- 3. Write a PHP script to accept employee details (name, address) and earning details (basic,
DA, HRA). Display employee details and earning details in the proper format. -->

<html>

<body>
    <form action="question_3.php" method="post">
        Emp no :<input type="text" name="eno"></br>
        Name :<input type="text" name="enm"><br>
        Address :<input type="text" name="eadd"><br>
        Basic : <input type="text" name="e1"></br>
        DA : <input type="text" name="e2"></br>
        HRA :<input type="text" name="e3"></br>
        <input type="submit" value="Show" name="submit">
    </form>
    <?php
        if ( isset($_POST["submit"]) ) {
            $eno = $_POST["eno"];
            $enm = $_POST["enm"];
            $eadd = $_POST["eadd"];
            $e1 = $_POST["e1"];
            $e2 = $_POST["e2"];
            $e3 = $_POST["e3"];
            echo "Employee number:- $eno <br/>";
            echo "Employee name:- $enm <br/>";
            echo "Address:- $eadd <br/>";
            echo "Basic:- $e1 <br/>";
            echo "DA:- $e2 <br/>";
            echo "HRA:- $e3 <br/>";
        }
    ?>
</body>

</html>