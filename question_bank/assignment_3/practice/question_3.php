<!-- 3. Write PHP program to perform the following operations on Indexed Array:
a) Check the array element is positive or negative
b) Calculate the average of array elements
c) Calculate the sum of array elements -->

<?php

    $arr = array(-1, 2, -3, 4, -5, 6, -7, 8, -9);    

    for ( $i = 0; $i < count($arr); $i++ ) {
        if ( $arr[$i] > 0 ) {
            echo "elem $i: ($arr[$i]) is +ve <br>";
        }
        else {
            echo "elem $i: ($arr[$i]) is -ve <br>";
        }
    }

    $sum = array_sum($arr);
    echo "Sum of array elements:- $sum <br/>";

    $avg = $sum / count($arr);
    echo "Average of array elements:- $avg <br/>"

?>
