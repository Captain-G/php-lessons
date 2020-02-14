<?php
//php data types
//variables can store different types of data that do different things
//php supports the following datatypes
//1. Strings
//2. Integers
//3. Float
//4. Boolean
//5.Arrays
//6.Objects
//7Null
//8.Resources


//string
//is a sequence of characters that are in double or sngle quotes
//eg. "hello world" or 'hello world'

//rules that govern names for variables

//a variable with the $ sign followed by the name of the variable
//a variable name must start with a letter or the underscore character
//a variable name cannot start with a number
//a variable name can only contain alphanumeric characters or underscores
//variable names are case sensitive ($age and $AGE are two different variables)

$x = "PhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y = "Kotlin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//what if you want to know how many characters make up a string; use strlen() function
//function: code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen('Peter Gachuki');

//count umber of words in a string; str_word_count() function

echo str_word_count("I love coding in Php");
echo "<br>";
$num_words = str_word_count("Coding is awesome");
echo $num_words;

//search for a text within a string: strpos()
$position_for_world = strpos("Hello World", "World");
echo "<br>";
echo $position_for_world;


echo "<br>";

//replace text within a string; use srt_replace
echo str_replace('World', 'Dunia', 'Hello World');

//Integers
//Numebers that are non decimals
//must atleast have one digit
$age = 21;
var_dump($age);

//float
//number with a decimal point
$cup_volume = 23.34;
var_dump($cup_volume);
echo "<br>";



//boolean ; true or false
//often used in conditional statements

$a = true;
$b = false;

echo "<br>";
echo 3>5;
//returns nothing to the browser meaning that it is false
echo "<br>";
echo 3<5;
//returns 1 to the browser meaning it is true

?>












