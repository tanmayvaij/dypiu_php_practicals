<!-- 3. Write a PHP Script to display the reverse of a number. E.g. 607 =>706 -->

<?php

    function revNum($n) {

        $num = 0;

        while ( $n != 0 ) {
            $num *= 10;
            $digit = $n % 10;
            $num += $digit;
            $n = floor($n / 10);
        }

        return $num;

    }

    $num = 607;
    $revnum = revNum($num);

    echo "$revnum \n";

?>
