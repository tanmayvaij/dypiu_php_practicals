<?php

    function factorial($n) {
        return ( $n < 2 ) ? 1 : $n * factorial($n-1);
    }
    
    $ans = factorial(5);

    echo "$ans \n";

?>
