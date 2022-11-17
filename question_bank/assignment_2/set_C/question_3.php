<!-- 7. Write a PHP script to count the total number of even and odd numbers between
1 to 1000. -->

<?php

    $even = 0;
    $odd = 0;

    for ( $i = 1; $i <= 1000; $i++ ) {
        if ( $i%2 == 0 ) $even++;
        else $odd++;
    }

    echo "even:$even odd:$odd  <br/>"

?>
