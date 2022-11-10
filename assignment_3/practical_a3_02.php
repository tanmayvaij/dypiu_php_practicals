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
