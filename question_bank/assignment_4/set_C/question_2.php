<!-- 2. Write a PHP script to perform arithmetic operations on two numbers. Write a PHP function
to display the result. (Use the concept of function and default parameters) -->

<?php

    function add($a=10, $b=10) {
        $res = $a + $b;
        echo "$res <br/>";
    }

    add(4, 5);

?>
