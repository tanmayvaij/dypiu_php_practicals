<!-- 1. Write PHP program to perform the following operations on Indexed Array:
a) Union of two arrays
b) Traverse the array elements in random order -->

<?php

    $arr1 = array(1, 2, 3, 4, 5, 6);
    $arr2 = array(4, 5, 6, 7, 8, 9);

    $ua = array_unique(array_merge($arr1, $arr2));
    print_r($ua);
    echo "<br/>";

    shuffle($arr1);
    print_r($arr1);

?>
