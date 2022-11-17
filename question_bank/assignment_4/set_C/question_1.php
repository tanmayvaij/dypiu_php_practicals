<!-- 1. Write a PHP script to define a function “DisplayDay”, which will display the day of the
current date. -->

<?php

    function DisplayDay() {

        $n = date("N");
        
        switch ($n) {
            case 1:
                echo "Monday <br/>";
                break;
            case 2:
                echo "Tuesday <br/>";
                break;
            case 3:
                echo "Wednesday <br/>";
                break;
            case 4:
                echo "Thursday <br/>";
                break;
            case 5:
                echo "Friday <br/>";
                break;
            case 6:
                echo "Saturday <br/>";
                break;
            case 7:
                echo "Sunday <br/>";
                break;
        }
        
    }

    DisplayDay();

?>
