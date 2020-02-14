<?php
//php operators
//used to perform operations on variables and values
//php has the following operators
//arithmetic operators
//assignment operators
//comparison operators
//logical operators



//arithmetic operators
//addition
$x = 235;
$y = 421;
$sum = $x + $y;
echo "The sum of 235 and 421 is". $sum;
echo "<br>";
echo 235 + 421;
echo "<br>";
//subtraction
$x = 235;
$y = 421;
$sub = $y - $x;
echo "The sub of 235 from 421 is". $sub;
echo "<br>";
echo 421 - 235;
echo "<br>";

//multiplication
$x = 235;
$y = 421;
$mult = $y * $x;
echo "The product of 235 and 421 is". $mult;
echo "<br>";
echo 421 * 235;
echo "<br>";
//division
$x = 235;
$y = 42451;
$div = $y / $x;
echo "42451 divided by 235 is". $div;
echo "<br>";
echo 42451 / 235;
echo "<br>";

//%:modulus
$x = 3;
$y = 2;
$mod = $x % $y;
echo "The modulus of 3 and 2 is". $mod;
echo "<br>";
echo 3 % 2;
echo "<br>";

//**:exponential
echo 2**3;

echo "<br>";

//assignment operators
//used to write a value to a variable

$car = "Benz";
$i = 12;
$f = 12.12;
//assignment ops in other arithmetic ops
$s = 30;
$sum = $i = $s;
$i = $i = $s;
$i =+ $s;
echo $i;
echo "<br>";


$a = 100;
$b = 200;

$a+= 100;
echo $a;
echo "<br>";



//3. comparison operators
//used to compare values
//comparison ops return a boolean data types : true or false
//1. == (equal)
$s = 2;
$t = 3;
$j = 2;
echo "<br>";
$answer = $s == $t;

var_dump($answer);
echo "<br>";

$db_username = "johndoe";
$db_password = "ekapassword";


$db_username = "mikedoe";
$user_password = "ekapassword";

    $check = $db_username == $db_username;
    var_dump($check);
    echo "<br>";


//2. = = =; identical : returns true if one variable is equal to another variable and these two
// variables are of the same datatype

$check = $db_password === $user_password;
var_dump($check);
echo "<br>";

//3. != ; not equal to ; return true if two variables are not equal


$check = $db_password != $user_password;
var_dump($check);
echo "<br>";

//4. !== not identical ; returns true if two variables are not identical

$check = $db_password !== $user_password;
var_dump($check);
echo "<br>";

//5. > greater than : returns true if a value is greater than the other value
$myname = "antony the dev";
$yourname = "john graham doe";
$result = strlen($myname) > strlen($yourname);
var_dump($result);
echo "<br>";



//.6 < less than : returns true if a value is less than the other value
$myname = "antony the dev";
$yourname = "john graham doe";
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo "<br>";



//7. >= greater than or equal to: returns true if a value is greater than or equal to the other value
$myname = "antony the dev";
$yourname = "john graham doe";
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo "<br>";



//.8 < less than or equal to: returns true if a value is less than or equal to the other value
$myname = "antony the dev";
$yourname = "john graham doe";
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo "<br>";

//4 logical ops
//used to combine conditional statements
//1. and : returns true if two operations are both true
$x = 100;
$y = 200;

if($x == 100 and $y == 200){
    echo "<h1>It is true that $x is equal to 100 and $y is equal to 200</h1>";
}



//2. or : returns true if either one of the two operations is true
$x = 100;
$y = 200;

if($x == 300 or $y = 200){
    echo "<h1>It is true that $x is equal to 100 and $y is equal to 200</h1>";
}

//3. ! not : return true if a variable is false

$check = !($x == 100 and $y ==200);
var_dump($check);
























