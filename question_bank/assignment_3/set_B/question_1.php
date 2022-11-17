<!-- 1. Write a PHP script to perform the following operations on string :
i) Compare string 2 with string3.
ii) Convert all the strings to Upper case
iii) Convert all the strings to Lowercase -->

<?php

    $str1 = "This is string 1"; 
    $str2 = "This is string 2";

    echo strcmp($str1, $str2)."<br/>";

    $us = strtoupper($str1);
    echo "$us <br/>";

    $ls = strtolower($str2);
    echo "$ls <br/>";

?>
