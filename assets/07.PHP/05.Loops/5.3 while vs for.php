<?php 
// কতবার ঘুরবে সেটা জানা থাকলে
for ( $i = 1 ; $i <= 10 ; $i++ ) {
    echo "$i\n";
}

// কতবার ঘুরবে সেটা জানা না থাকলে
$correctPassword = "12345";
$userInput = "";
while ( $userInput !== $correctPassword ){
    $userInput = readline("সঠিক পাসওয়ার্ড দিনঃ ");
}