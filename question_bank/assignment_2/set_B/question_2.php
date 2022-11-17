<!-- 2. Write a PHP Script to display a perfect numbers between 1 to100. -->

<?php

    function perfectNumbers($n) {
        $sum = 1;
        for ( $i = 2; $i < $n; $i++ ) if ( $n%$i == 0 ) $sum += $i;
        return $sum == $n;
    }

    for ( $i = 1; $i < 101; $i++ ) if ( perfectNumbers($i) == true ) echo "$i <br/>";

?>
