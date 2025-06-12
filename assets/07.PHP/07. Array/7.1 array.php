<?php
/*
$fruits = array(
    "Mango", "Jackfruit", "Litchi"
);
echo $fruits[0];
var_dump($fruits);
print_r($fruits);

$number = [10, 20, 30];
array_push($number, 40);
array_unshift($number, 5);
array_pop($number);
array_shift($number);
print_r($number);


$student = [
    'name' => 'Abdur Rahim',
    'age'  => 25,
    'department' => 'Mathematics'
];
print_r($student);
echo $student['department'];


$csv = "Mango,Jackfruit,Litchi";
$fruits = explode(",", $csv);
$fruitsStr = implode("-",$fruits);
print_r($fruitsStr);

$student = [
    ['name' => 'Abdur Rahim', 'age' => 25],
    ['name' => 'Abdur Karim', 'age' => 24],
    ['name' => 'Abdur Kaium', 'age' => 23]
];
print_r($student);
echo $student[2]['age'];

$data = ['name' => 'Abdur Rahim', 'age' => 25];
$serialized = serialize($data);
$json = json_encode($data);
print_r($json);
*/
$fruits = ["Mango", "Jackfruit", "Litchi"];
foreach ( $fruits as $fruit ) {
    echo $fruit . "\n";
}

$person = [
    'name' => 'Nayem',
    'city' => 'Khulna',
    'phone'=> '01900000000'
];
foreach ( $person as $key => $value ) {
    echo "$key : $value\n" ;
}
print_r($person);

$person = [
    'name' => 'Nayem',
    'city' => 'Khulna',
    'phone'=> '01900000000'
];

unset($person['name']);
print_r($person);

$data = ['Mango', '', null];
$filtered = array_filter($data);
print_r($filtered);


$user = ['name' => 'Nayem', 'email' => 'nayem@gmail.com'];
extract($user);
echo $email;

$numbers = range(1, 15);
$sliced = array_slice($numbers, 4, 1);
print_r($numbers);
print_r($sliced);

$arr1 = ['Mango', 'Jackfruit'];
$arr2 = ['Litchi', 'Pineapple'];
$marged = array_merge($arr1, $arr2);
print_r($marged);

$fruits = ['Mango', 'Jackfruit'];
if(in_array('Litchi', $fruits)){
    echo "Found!";
}else{
    echo "Not Found!";
}

$arr1 = ['Mango', 'Litchi'];
$arr2 = ['Litchi', 'Pineapple'];
$differecnce = array_diff($arr1, $arr2);
print_r($differecnce);

$numbers = range(2, 15, 2);
print_r($numbers);