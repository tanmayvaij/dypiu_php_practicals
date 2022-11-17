<!-- 1. Write a PHP Script to display prime numbers between 1 to 50. -->

<?php

    function isPrime($n) {
        for ( $i = 2; $i <= sqrt($n); $i++ ) if ( $n%$i == 0 ) return false;
        return true;
    }

    for ( $i = 1; $i < 101; $i++ ) {
        if ( isPrime($i) == true ) {
            echo "$i <br/>";
        }
    }

?>
