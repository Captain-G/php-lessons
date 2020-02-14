<?php

//conditional statements are used to perform different actions based on different condiions
//to allow your code to perform different actions based on diff variables
//php has the following if conditional statements

//1. if statement - executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code if that condition is false
//3.if...elseif...else statement - executes different codes for more than two conditions
//switch statement - selects one of many blocks of code to be executed

//
//if(condition to examine){
//    code to be executed if condition is TRUE
//}


$db_firstname = "john doe";
$user_firstname = "john doe";


if($user_firstname == $db_firstname){
    echo "<p>Credentials matched. You can log in.</p>";
}


$age = 16;
if($age < 18){
    echo "<p>You cannot take alcohol. Go home and study hard.</p>";
}


//2. if...else statement - executes some code if a condition is true and another code if that condition is false



$age = 32;
if($age < 18){
    echo "<p>You cannot take alcohol. Go home and study hard.</p>";
}else{
    echo "<h1>Hurray you are old enough. Grab a crate.</h1>";
}

//3.if...elseif...else statement - executes different codes for more than two conditions
//if(condition to examine){
//    code to be executed if is true
//}
//elseif(condition){
//    code to be executed if the first condition is false and this condition is true
//}
//elseif(condition){
//code to be executed if the second condition is false and this condition is true
//}
//else{
//    code to be executed if all conditions are false
//}
echo "<br>";
$age = 19;
$kenyan = false;

if($age < 18){
    echo "<p>You cannot take alcohol. Go home and study hard.</p>";
}elseif($kenyan == true){
    echo "<h1>Hurray you are old enough. Grab a crate.</h1>";
}
else{
    "<h3>You are underage and not kenyan, you are kidding!</h3>";
}
//
//
//assignment  :
//using a conditional statement , check if 100 is a multiple of 2;
//if true echo "100 is a multiple of 3" else echo "100 is a multiple of 2"
//write code that calculates the volume of a cylinder of height 14 and diameter 14
//echo "this is the cylinder to use if the volume is greater than 10"

//question 1
$x = 100;
$y = 2;
$mod = $x % $y;
if($mod == 1 ){
    echo "100 is a multiple of 3";
}
else{
   echo " 100 is a multiple of 2";
}
echo "<br>";
//question 2
$height = 14;
$diameter = 14;
$pi = 3.142;
$volume = $pi * ($diameter/2)**2 * $height;
if($volume>10){
    echo "This is the cylinder to use if the volume is greater than 10";
}
else{
    echo "This is not the cylinder to use if the volume to use if the volume is greater than 10";
}



//switch statement - selects one of many blocks of code to be executed
//switch_syntax
//switch (n){
//    case label1:
//        code to execute if n = label1;
//        break
//    case label1:
//         code to execute if n = label2;
//        break
//    case label1:
//          code to execute if n = label3;
//        break
//    case label1:
//         code to execute if n = label4;
//        break
//    default:
//        code to be executed***********
//}
//


$favTeam = "chelsea";
switch (favTeam){
    case "Man-U";
        echo "<p style='color:red'>Man-U at position 5</p>";
        break;

    case "Liverpool";
        echo "<p style='color:black'>Liverpool at position 6</p>";
        break;

    case "Leicester";
        echo "<p style='color:blue'>Leicester at position 3</p>";
        break;

    default:
        echo "<p style='color:red;'>None of the above is my favourite team</p>";
}

















?>