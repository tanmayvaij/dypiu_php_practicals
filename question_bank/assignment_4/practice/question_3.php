<!-- 3. Write a PHP script to calculate the factorial of a number using a function. -->

<?php

    function factorial($n) {
        return ( $n < 2 ) ? 1 : $n * factorial($n-1);
    }
    
    $ans = factorial(5);

    echo "$ans \n";

?>
