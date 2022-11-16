<!-- 2. Write a PHP Script to calculate the area of Circle, Square, and Rectangle. -->

<?php

    function areaOfCircle($r) {
        $area = pi() * pow($r, 2);
        return $area;
    }

    function areaOfSquare($a) {
        $area = pow($a, 2);
        return $area;
    }

    function areaOfRectange($l, $b) {
        $area = $l * $b;
        return $area;
    }

    $circle = areaOfCircle(7);
    $square = areaOfSquare(4);
    $rectangle = areaOfRectange(4, 5);

    echo "Area of circle:- $circle \n";
    echo "Area of square:- $square \n";
    echo "Area of rectangle:- $rectangle \n";

?>
