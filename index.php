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









?>

</body>
</html>