<?php

$value = "A";
$result = "";

switch($value){
    case "A":
    case"B":
    case"C":
        $result = "You pass";
        break;
    case "D":
        $result = "You didn't pass";
        break;
    case "E":
        $result = "Maybe you got the wrong major";
        break;
    default:
        $result = "What is that grade?";
}

echo $result . PHP_EOL;

//Match expression code
$result = match($value){
    "A", "B", "C" => "You pass",
    "D" => "You didn't pass",
    "E" => "Looks like you're in the wrong major",
    default => "What is that grade?"
};

echo $result . PHP_EOL;

//Non equals check in match expression
$value = 80;

$result = match(true){
    $value >= 85 => "A",
    $value >= 80 => "A-",
    $value >= 75 => "B+",
    $value >= 70 => "B",
    $value >= 65 => "B-",
    $value >= 60 => "C+",
    $value >= 55 => "C",
    default => "D"
};

echo "Grade of $value" . PHP_EOL;

//Matching expression with conditions
$name = "Mr. Hayami";

$result = match(true){
    str_contains($name, "Mr.") => "Hi, sir",
    str_contains($name, "Mrs.") => "Hi, madam",
    default => "Hello"
};

echo $result . PHP_EOL;
