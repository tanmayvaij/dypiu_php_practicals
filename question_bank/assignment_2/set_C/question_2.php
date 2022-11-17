<!-- 6. Write a PHP script to change the background color of the browser using a switch
Statement according to the day of the week. -->

<?php

    $day=date("l");

    switch($day) {
        
        case 'Monday':
            $bg_color = "red";
            break;
        case 'Tuesday':
            $bg_color = "blue";
            break;
        case 'Wednesday':
            $bg_color = "blue";
            break;
        case 'Thursday':
            $bg_color = "gray";
            break;
        case 'Friday':
            $bg_color = "yellow";
            break;
        case 'Saturday':
            $bg_color = "green";
            break;
        case 'Sunday':
            $bg_color = "black";

    }

    echo "<div style='background-color:$bg_color'>Welcome to my Homepage</div>";

?>