<!-- 2. Write a PHP Script to display the sum and average of array elements(Using predefined
functions) -->

<?php

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $arsum = array_sum($arr);

    $aravg = $arsum / count($arr);

    echo "Sum of array:- $arsum \n";

    echo "Average of array:- $aravg \n";

?>
