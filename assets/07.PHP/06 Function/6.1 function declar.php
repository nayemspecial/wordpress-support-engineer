<?php
function greet() {
    echo "Hello, Future Developers!";
}
greet();

function add($n1,$n2) {
    return $n1 + $n2;
}
echo add(10,10);

$globalVar = "Global\n"; //Global Variable
 
function testScope() {
    $local = "Nayemur Rahman"; //local variable
    global $globalVar;
    echo $globalVar;
    echo $local;
}
testScope();

$greet = function () {
    echo "Hello, Future Developers!";
};
$greet();


$add = fn($n1,$n2) => $n1 + $n2;
echo $add(10,5);


function process($callback){
    return $callback("World");
}

$result = process(function($name) {
    return "Hello, $name!";
});

echo $result;