<!-- 3. Write a PHP script to define a function Maximum, which will accept 3 numbers as
parameters and returns a maximum of 3 numbers. -->

<?php

    function Maximum($num1, $num2, $num3) {
        if ( $num3 > $num1 && $num3 > $num2 ) echo "$num3 \n";
        else if ( $num2 > $num1 && $num2 > $num3 ) echo "$num2 \n";
        else echo "$num1 \n";
    }

    echo Maximum(4, 5, 6);

?>
