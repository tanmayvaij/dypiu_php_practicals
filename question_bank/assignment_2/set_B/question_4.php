<!-- Write a PHP Script to display Armstrong numbers between 1 to 500. -->

<?php 

    function isAmstrong($num) {

        $temp = $num;

        $length = strlen((string) $num);

        $amsnum = 0;

        while ( $num != 0 ) {
            $digit = $num % 10;
            $num = floor($num / 10);
            $amsnum += pow($digit, $length); 
        }

        return $temp == $amsnum;

    }

    for ( $i = 1; $i <= 500; $i++ ) if ( isAmstrong($i) == true ) echo "$i <br/>";

?>
