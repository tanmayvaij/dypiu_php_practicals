<!-- 2. Write a PHP script to perform the following operations on string :
i) Convert each word of a string to Lowercase and Uppercase.
ii) Find the first and last occurrence of string2 in string1. -->

<?php

    $str = "This is a Sample String";

    $ls = strtolower($str);
    $us = strtoupper($str);

    echo "Lowercase:- $ls <br/>";
    echo "Uppercase:- $us <br/>";

    $o1 = strpos($str, "i");
    $o2 = strrpos($str, "i");

    echo "First occurence of 'i':- $o1 <br/>";
    echo "Last occurence of 'i':- $o2 <br/>";

?>
