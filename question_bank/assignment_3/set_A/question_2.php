<!-- 2. Write a PHP program to perform the following operations on an associative array:
a) Display the elements of an array along with the keys.
b) Display the size of an array
c) Delete an element from an array from the given index.
d) Reverse the order of each element’s key-value pair
e) Traverse the elements in an array in random order. -->

<?php

    $arr = array( 1=>"one", 2=>"two", 3=>"three", 4=>"four" );
    
    foreach ($arr as $key => $value) echo "$key => $value <br/>";

    $arrsize = count($arr);
    echo "Size:- $arrsize <br/>";

    unset($arr[4]);
    print_r($arr);
    echo "<br/>";

    $farr = array_flip($arr);
    print_r($farr);
    echo "<br/>";

    shuffle($arr);
    print_r($arr);
    echo "<br/>";
    
?>
