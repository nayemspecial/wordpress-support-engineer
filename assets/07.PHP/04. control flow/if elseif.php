<?php

$score = 40;
if( $score >=80 ){
    echo "A+\n";
}elseif( $score >= 70 ){
    echo "A\n";
}elseif( $score >= 60 ){
    echo "A-\n";
}elseif( $score >= 50 ){
    echo "B\n";
}elseif( $score >= 40 ){
    echo "C\n";
}elseif( $score >= 33 ){
    echo "D\n";
}else{
    echo "Failed";
}