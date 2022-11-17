<!-- 1. Write a PHP script to perform the following operations on string :
i) Replace the string2 by string3 in string1.
ii) Reverse and display the string. -->

<?php

    $str = "this is a test string";
    $nstr = str_replace("test", "masti", $str);
    echo "$nstr <br/>";

    $rev = strrev($str);
    echo "$rev <br>";

?>
