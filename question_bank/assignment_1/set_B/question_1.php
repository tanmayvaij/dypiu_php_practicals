<!-- 1. Write a PHP Script to display the surface area and volume of a cuboid.
(Hint: surface area=2(lb+lh+bh ), volume = l*b*h ) -->

<?php

    function cuboidSurfaceArea($l, $b, $h) {
        $sa = 2*(($l*$b) + ($l*$h) + ($b*$h));
        return $sa;
    }

    function cuboidVolume($l, $b, $h) {
        $vm = $l*$b*$h;
        return $vm;
    }

    $sa = cuboidSurfaceArea(1, 2, 3);
    $vm = cuboidVolume(1, 2, 3);

    echo "Surface Area:- $sa \n";
    echo "Volume:- $vm \n"

?>
