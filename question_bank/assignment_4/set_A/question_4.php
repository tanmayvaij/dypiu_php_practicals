<!-- 4. Write a PHP script to swap two numbers using a function (Use Call by value and Call by
reference) -->

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
