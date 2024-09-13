<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cavas</title>
</head>
<body>
    <!-- <h1>Welcome to my world</h1> -->

<?php 

//  echo " <h1> Hello world </h1>";

//  echo 3 * 5 ;

$characterName = 'dbest ola';
$characterAge = 65;

// interpolation
 echo "there is a man call $characterName"; 
 echo "<br>";
 echo "he is $characterAge years old";
 echo "<br>";
 echo " he loves music";
 echo "<br>";
//  concatination
 echo 'he hate being ' . $characterAge . ' years old ';

// Local val
// global val
// static val

$myName = 'ola';

function myName(){
    // global $myName;
    echo 'my name is ' .  $GLOBALS['myName'];
}

myName();


increaseWhenItCalled(); 
increaseWhenItCalled(); 
increaseWhenItCalled(); 
increaseWhenItCalled(); 
increaseWhenItCalled(); 

// echo 'my name is' .  $myName;

function increaseWhenItCalled() {
    static $num = 0;
    $num ++;
    echo '<br>' . $num . '<br>';
}

echo $characterName, "<br>", $characterAge, "<br>";
echo "<br>";
print $characterName;
 echo "<br>";
echo ($characterAge);

// DataType

/*  
String
Float
Integer
Boolean
Null
Resource
Array
 */

 var_dump($characterName);

 echo "<br>";

 echo gettype($characterAge);

 echo "<br>";

 echo strlen($characterName);

 echo "<br>";


 $characterMe = "welcome to my world" ;

 echo str_word_count($characterMe);

 echo "<br>";

 echo str_contains($characterMe, "world");

 
 echo "<br>";

 echo str_ends_with($characterMe, "bads");

 echo "<br>";

 echo strpos($characterMe, "B");

 echo "<br>";


 echo str_starts_with($characterMe, "W");
 
 echo "<br>";

 echo strtoupper($characterMe);

 echo "<br>";

 echo strtolower($characterMe);

 echo "<br>";

 echo str_replace("world", "universe", $characterMe);

 echo "<br>";

 echo strrev($characterMe);

 echo "<br>";

 echo str_repeat($characterMe . " " . "<br>" ,10);

 echo "<br>";

 echo trim($characterMe);

 echo "<br>";

print_r (str_split($characterMe, 4));
echo "<br>";

echo substr($characterMe, 8 ,2);

// interger whole number
// float or double
// number string
// Arithemetic Operation

// Addition
// Subtract
// Multiply
// Division
// BODMAS rules


$age = -12;
$gpa = 4.5;
$homeNumber = "13";

echo '<br>';
echo $age;
echo '<br>';
echo $gpa;
echo '<br>';
echo $homeNumber;

echo '<br>';

echo $age * $homeNumber;

echo '<br>';

echo '<br>';
echo '<br>';

echo 3*4 *(6-3);

echo '<br>';

echo 3*4 *6-3;

echo '<br>';

echo PHP_INT_MAX;

echo '<br>';

var_dump(9223372036854775808);

echo '<br>';

echo PHP_FLOAT_MAX;

echo '<br>';

var_dump(1.7976931348623E+309);

// echo '<br>';

// echo is_double();

// echo '<br>';

// echo is_int();

echo '<br>';

// casting

echo (int)$homeNumber ;
echo '<br>';
var_dump((int)$homeNumber);

echo '<br>';

// Math
echo "<hr>";
echo pi();
echo '<br>';
echo min($age, $gpa, $homeNumber);
echo '<br>';
echo max($age, $gpa, $homeNumber);
echo '<br>';
echo abs($age) , "<br>";
echo sqrt(64);
echo '<br>';
echo round($gpa);
echo '<br>';
echo rand(10, 100);
echo '<br>';
echo floor(6.9);
echo '<br>';
echo ceil(6.4);
echo "<hr>";

// constant value

define("name", "Olanrewaju Oladimeji");
const age = 9;
define("greeting", "welcome to class");

echo name;
echo '<br>';
echo age;
echo '<br>';
echo greeting;
echo '<br>';

echo __FILE__;

echo '<br>';

MyFunction();

echo '<br>';

function MyFunction(){
    echo __FUNCTION__;
}

echo '<br>';

// Comparison Operator

// == Equal
// === identical
// != Not equal
// !== Not identical
// > greater than
// < less than
// <= less than or equal to
// >= greater than or equal to

// ++ increment by one
// -- Decrement y one

// logical operators
// || or
// && and

// Conditional Assignment
// ? :
// ?? NULL safety

const num1 = 4;
const num2 = 3;

if(num1 == num2){
    echo num1 . "And" . num2 . "are the same";
}else{
    echo "number are not the same";
}

echo "<br>";

switch ("i") {
    case 'i':
        echo "am i";
        break;
    case 'jesus':
        echo "is Lord";
        break;
    
    default:
        echo "i dont even know myself";
        break;
}

function greetTheWorld ($name) {
    echo "<br>";
    echo "hello $name";
}

greetTheWorld (name: "dbest");

function calculate ($num1, $num2, $op = "+"): int|float{
    echo "<br>";
    switch ($op) {
        case "+";
            return $num1 + $num2;
            
            case "*";
            return $num1 * $num2;
            
            case "-";
            return $num1 - $num2;
            
            case "/";
            return $num1 / $num2;
           
        
        default:
           return "$op is not a supported";
            
    }
}

echo calculate (num1: 17, num2: 2, op: "/");

echo "<br>";

// function getGrade($grade): string {
//     switch ($grade) {
//         case 'A':
//            return "you are very good";
//         case 'B':
//             return "you are very good";
//         case 'C':
//             return "you are very good";
//         case 'D':
//             return "you are very good";
//         case 'E':
//             return "you are very good";
//         case 'F':
//             return "you are very good";
        
//         default:
//             return "Your input is not valid";
//     }
// }

// echo getGrade(grade: "B");


// $grade = "91";

// echo match ($grade) {
//      "A","a","90","100", => "You are very good",
//      "B","b","80", => "You are good",
//      default, => "You failed",
// }

function getGrade($grade): string{
    return match ($grade) {
        "A","a","90","100", => "You are very good",
        "B","b","80", => "You are good",
        default, => "You failed",
   };
}

echo getGrade(grade: "A");

echo "<hr>";

function sayHi($i) {
    echo "<br>", $i, "hi";
}

// for loop

for($i = 0; $i < 10; $i++) {
    sayHi($i);
}

$i = 0;

while($i < 10){
$i++;
echo "<br>", "i hate while loop";
}

$s = 0;

do{
    
echo "<br>", "hello $s"; 
$s++;
}
while($s < 10);

$names = ["Ademola", "ibukunoluwa", "wale", "adekogbe", "joseph"];

// for each

$names[0] = "best";

echo "<br>";
array_push($names, "olaoluwa");
print_r($names);


foreach($names as $n) {
    echo "<br>". $n . " myG";
}

$wale;
foreach($names as $n) {
    if ($n === "wale"){
        $wale = $n;
        continue;
    }
    echo "<br>", "kill $n";
}

echo "<br>" . "we have saved $wale";

foreach($names as $n) {
    if ($n === "wale"){
        $wale = $n;
        break;
    }
    echo "<br>", "i am not wale my name is $n";
}

echo "<br>" . "we have found $wale";

echo "<br>"; 

$me = [
    "name" => "Ademola",
    "gender" => "Name",
];

print_r($me);
echo "<br>";
echo $me["name"];

echo "<br>";
$car = [
    "brand" => "Toyota",
    "model" => "camry",
    "year" => "2021",
];

print_r($car);

echo "<br>";

echo implode ( " , " ,$car);

echo "<br>";

foreach($car as $key => $value) {
    echo $key . " . " . $value . "<br>";
}

echo "<br>";

echo checkTheValue ( "ade",  ["hello", "wale", "dolapo", "ade", "baba", "iya"] );

function checkTheValue($value, array $listOfValues): string{
    for ($i = 0; $i < count( $listOfValues); $i++){
        if($value === $listOfValues[$i]){
            return "the index of this value is $i and the value is $value";
        }
    }
}

echo "<br>";

$num = [4, 9, 8, 7, 3, 9];

echo sumArray($num);

function sumArray(array $num) {
    $sum = 0;

    for ($i = 0; $i < count($num); $i++) {
        $sum += $num[$i]; 
    }

    return $sum; 
}





























?>

</body>
</html>