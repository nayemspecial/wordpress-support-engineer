<?php
$score = 80;

switch( $score ) {
    case ( $score >=80 ):
        echo "A+";
        break;
    case ( $score >=70 ):
        echo "A";
        break;
    case ( $score >=60 ):
        echo "A-";
        break;
    case ( $score >=50 ):
        echo "B";
        break;
    case ( $score >=40 ):
        echo "C";
        break;
    case ( $score >=33 ):
        echo "D";
        break;
    default:
        echo "Failed";
}


