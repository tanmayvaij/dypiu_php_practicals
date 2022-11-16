<!-- 3. Write a PHP Script which will convert temperatures from Celsius(C)to Fahrenheit (F). 
(Hint:C=5.0/9(F-32) -->

<?php

    function celciusToFarenheit($celcius) {
        $f = (9/5)*$celcius + 32;
        return $f;
    }

    $farenheit = celciusToFarenheit(30);
    echo "Farenheit:- $farenheit F \n";

?>
