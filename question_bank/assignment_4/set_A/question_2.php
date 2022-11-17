<!-- 2. Write a PHP script to define a function EvenOdd, which will display even and odd numbers
between 1 to 50. -->

<?php

    function evenOdd() {
        echo "Odd numbers:- <br/>";
        for ( $i = 1; $i <= 50; $i++ ) if ( $i%2 != 0 ) echo "$i <br/>";

        echo "<br/>";

        echo "Even numbers:- <br/>";
        for ( $i = 1; $i <= 50; $i++ ) if ( $i%2 == 0 ) echo "$i <br/>";
    }

    evenOdd();

?>