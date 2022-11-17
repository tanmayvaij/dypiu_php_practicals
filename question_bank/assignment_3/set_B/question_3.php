<!-- 3. Write a menu-driven program in PHP to perform the following operations on associative
arrays:
i) Sort the array by values (changing the keys) in ascending, descending order.
ii) Also, sort the array by values without changing the keys.
iii) Find the intersection of two arrays.
iv) Find the union of two arrays. -->

<?php

    $arr = array( 1=>"one", 2=>"two", 3=>"three", 4=>"four" );

    asort($arr);
    print_r($arr);
    echo "<br/>";

    arsort($arr);
    print_r($arr);
    echo "<br/>";

    ksort($arr);
    print_r($arr);
    echo "<br/>";

    krsort($arr);
    print_r($arr);
    echo "<br/>";

    $arr1 = array(1, 2, 3, 4, 5, 6);
    $arr2 = array(4, 5, 6, 7, 8, 9);

    $ia = array_intersect($arr1, $arr2);
    print_r($ia);
    echo "<br/>";

    $ua = array_unique(array_merge($arr1, $arr2));
    print_r($ua);
    echo "<br/>";

?>
