<?php 

    $products = array(
        "mango" => 40,
        "banana" => 25,
        "peach" => 50
    );

    if ( isset($_POST["submit"]) ) {

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];

        $p1 = $products[$_POST["p1"]];
        $p2 = $products[$_POST["p2"]];
        $p3 = $products[$_POST["p3"]];

        $total = ($n1*$p1) + ($n2*$p2) + ($n3*$p3);

        echo $_COOKIE["name"]."<br/>";
        echo $_COOKIE["email"]."<br/>";
        echo $_COOKIE["address"]."<br/>";
        echo $_COOKIE["mode"]."<br/>";
        echo $total;

    }

?>
