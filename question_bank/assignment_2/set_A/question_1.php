<!-- 1. Write a PHP Script to check whether a year is a leap or not. -->

<?php

    $year = 2016;

    if ( ($year%400 == 0) || ( $year%4==0 && $year%100!=0 ) ) {
        echo "LEAP YEAR";
    }
    else {
        echo "NOT A LEAP YEAR";
    }

?>
