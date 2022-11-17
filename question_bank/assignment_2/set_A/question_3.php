<!-- 3. Write a PHP Script to display the grade of the student according to percentage. Use the
following conditions:
Percentage <40 => Grade=”Fail”
Percentage >= 40 and Percentage <=50 => Grade= “Pass Class”
Percentage >=50 and Percentage <=60 => Grade= “Higher Second Class”
Percentage >60 and Percentage <=70 => Grade= “First Class”
Percentage >70 => Grade= “First Class with Distinction” -->

<?php 

    $marks = 89;

    if ( $marks > 70 ) echo "First Class with Distinction \n";
    else if ( $marks > 60 ) echo "First Class \n";
    else if ( $marks > 50 ) echo "Higher Second Class \n";
    else if ( $marks > 40 ) echo "Pass Class \n";
    else echo "Fail \n";

?>
