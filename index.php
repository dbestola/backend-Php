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






















?>

</body>
</html>