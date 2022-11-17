<!-- 1. Write a PHP script to calculate the area and volume of a cylinder using a function. -->

<?php 

    function areaOfCylinder($r, $h) {
        return 2*pi()*$r * ( $r + $h );
    }

    function volumeOfCylinder($r, $h) {
        return pi()*$r*$r*$h;
    }

    $area = areaOfCylinder(5, 4);
    echo "Area of cylinder:- $area \n";

    $volume = volumeOfCylinder(5, 4);
    echo "Volume of cylinder:- $volume \n";

?>
