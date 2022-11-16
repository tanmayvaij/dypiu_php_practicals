<!-- 3. Write a PHP Script to display the total and percentage of Marks of Subjects (Out of 100)
Data Structure, Digital Marketing, PHP, SE, and Bigdata. -->

<?php 

    $ds = 89;
    $dm = 92;
    $php = 88;
    $se = 90;
    $bd = 96;

    $total = $ds + $dm + $php + $se + $bd;

    $percentage = $total / 5;

    echo "Total:- $total \n";
    echo "Percentage:- $percentage \n";

?>