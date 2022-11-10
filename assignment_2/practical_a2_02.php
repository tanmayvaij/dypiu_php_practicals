<?php

    $assoc_arr = array(
        "Sophia"=>"31",
        "Jacob"=>"41",
        "William"=>"39",
        "Ramesh"=>"40"
    );

    asort($assoc_arr);
    print_r($assoc_arr);
    echo "\n";

    ksort($assoc_arr);
    print_r($assoc_arr);
    echo "\n";

    arsort($assoc_arr);
    print_r($assoc_arr);
    echo "\n";

    krsort($assoc_arr);
    print_r($assoc_arr);
    echo "\n";

?>
