<!-- 5. Write a PHP script to display a number in words (Use Switch case)
e.g. 345–three four five -->

<?php

    function num2Words($number) {

        $word = (string) $number;
        $len = strlen($word);

        for ( $i = 0; $i < $len; $i++ ) {

            switch ($word[$i]) {
                case '0':
                    echo "zero ";
                    break;
                case '1':
                    echo "one ";
                    break;
                case '2':
                    echo "two ";
                    break;        
                case '3':
                    echo "three ";
                    break;
                case '4':
                    echo "four ";
                    break;
                case '5':
                    echo "five ";
                    break;
                case '6':
                    echo "six ";
                    break;        
                case '7':
                    echo "seven ";
                    break;
                case '8':
                    echo "eight ";
                    break;     
                case '9':
                    echo "nine ";
                    break; 
            }

        }

    }

    num2Words(345);



?>
