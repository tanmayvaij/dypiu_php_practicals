<?php

    function reverseNumber($num) {

        $revnum = 0;

        while ( $num != 0 ) {
            $revnum *= 10;
            $digit = $num%10;
            $revnum += $digit;
            $num = floor($num/10);
        }

        return $revnum;

    }

    $ans = reverseNumber(154);
    
    echo "$ans \n";

?>
