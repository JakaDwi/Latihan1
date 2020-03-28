<?php

$n = 95.5;

    if ( $n < 50 ) {
        echo "Grade E";
    }
        elseif ( $n >= 50  && $n < 60 ) {
            echo "Grade D";
        }
        elseif ( $n >= 60 && $n < 70 ) {
            echo "Grade C";
        }
        elseif ( $n >= 70 && $n < 80 ) {
            echo "Grade B";
        }
        elseif ( $n >=80 && $n < 90 ) {
            echo "Grade A";
        }
    else {
        
        echo "Grade A+";
    }

?>