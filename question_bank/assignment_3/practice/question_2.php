<!-- 2. Write a PHP script to count the total number of vowels (a,e, i,o,u) from the string. Show the
occurrences of each vowel from the string. -->

<?php

    $str = "anonymous";
    $vowels = array("a", "e", "i", "o", "u");
    $count = 0;

    for ( $i = 0; $i < strlen($str); $i++ ) {
        if ( in_array($str[$i], $vowels) ) {
            $count++;
            echo "Vowel at index $i = $str[$i] <br/>";
        }
    }

?>
