<!-- 2. Write a PHP Script to swap the values of two variables. -->

<?php

    function swap(&$x, &$y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    $a = 10;
    $b = 20;

    echo "Before:- a:$a b:$b \n";

    swap($a, $b);

    echo "After:- a:$a b:$b \n";

?>
