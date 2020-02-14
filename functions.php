<?php
//
//besides the built in functions it is possible to create your own functions
//a function is a block of statements that can be used repeatedly in a programme / does a specific task
//A function will not execute automatically when a page loads
//a function will be executed by a call to the function
//


//syntax
//function function_name({
//    block of code that will be executed only when the function is called/used
//})
//

//function creation / declaration
function greetings(){
    echo 'Hello world';
}

//function calling ; use the function name followed by parenthesis

greetings();
echo '<br>';
function greetings1(){
    echo 'Pilau and fish fingers';
}

greetings1();
echo '<br>';

function greetings2($name,$age){
    echo 'Hello '.$name. ' You are '.$age.'<br>';
}
greetings2('John','23');
//greetings2();
$country= kenya;
//functions with default argument
function greetings3($name='Php'){
    echo "I am a $name developer <br>";
}

greetings3('Javascript');

//functions that return values
function greetings4($name){
//    $get_name = $name;
    return $name;
}
$found_name = greetings4('John');
echo $found_name;

function areaofacircle($radius){
    $pie = 3.142;
    $area = $pie * $radius * $radius;
    return $area;
}

//failed to reflect debug code later
//$cr1 = 7;
//$cr2 = 14;
//
//$areac1 = $areaofacircle($cr1);
//$areac2 = $areaofacircle($cr2);
//echo $areac1;
//echo $areac2;
//
//
echo "<br>";



//functions that take an array as an argument
function loopArray($array_name, $myforeach=true){
    if ($myforeach){
        echo "FOR EACH LOOP <br>";

//        if true run foreach
//foreach loop
        foreach ($array_name as $item){
            echo "$item <br>";
        }

    }else{
//        for loop
//        if false run for loop
        echo "FOR LOOP <br>";
        $length = count($array_name);
        for($s = 0; $s < $length ; $s++){
            echo "$array_name[$s] <br>";
        }
    }

}





$games = array("GTA", "NFS" , "FIFA", "PES" , "MORTAL COMBAT", "Jack ryan", "Angry birds");
loopArray($games);
loopArray($games, $myforeach=false);

//assignment:
//write a function that calculates the area of a circle and prints the result with unit of measurement .
// this function should have options for unit measurement

function area_unit($radius, $cm = true){
    $pie = 3.142;
    $area = $pie * $radius * $radius;
    if($cm){
        echo "Area is $area cm <br>";
    }else{
        echo "area is $area m <br>";
    }

}
area_unit("7","false");


function maxy($num1,$num2){
    if($num1 > $num2){
        return $num1;
    }else{
        return $num2;
    }
}
$results = maxy('3','5');
echo $results. '<br>';










?>