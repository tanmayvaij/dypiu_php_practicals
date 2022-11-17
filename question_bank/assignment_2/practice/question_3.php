<!-- 3. Write a PHP Script to display a Multiplication table of a number -->

<?php 

    $n = 3;

    for ( $i = 1; $i < 11; $i++ ) {
        $res = $n * $i;
        echo "$n * $i = $res \n";
    }

?>
