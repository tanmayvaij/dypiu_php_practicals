<!-- 1. Write a PHP Script to define an array. Find the element from the array that matches the given
value using the appropriate search function -->

<?php

    function search($arr, $n) {
        for ( $i = 0; $i < $n; $i++ ) {
            if ( $arr[$i] == $n ) {
                return $i;
            }
        }
        return -1;
    }

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    $elem = search($arr, 5);

    echo $elem;

?>
