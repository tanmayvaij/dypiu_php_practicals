<!-- 2. Write a PHP program to store the current date-time in a COOKIE and display the ‘Last
visited on’date-time on the web page upon reopening of the same page. -->

<?php

    if ( isset($_COOKIE["lvisit"]) ) {
        $lvisit = $_COOKIE["lvisit"];
        echo "last visit at:- $lvisit <br>";
        $date = date("d-m-Y H-i-s");
        setcookie("lvisit", $date);
    }

    else {
        $date = date("d-m-Y H-i-s");
        setcookie("lvisit", $date);
        echo "last visit at:-  <br>";
    }

?>
