<?php

//arrays
//an array stores multiple values in one single variable
$fruit1 = "mango";
$fruit2 = "orange";
$fruit3 = "pineapple";
$fruit4 = "apple";
$fruit5 = "avocado";
$fruit6 = "lemon";
$fruit7 = "watermelon";
//create an array in php
//in php the array function is used to create an array

$fruits = array('mango', 'orange' , 'pineapple' , 'apple' , 'avocado' , 'lemon' , 'watermelon');
//echo $fruits;
//count number of items in an array
$num_items = count($fruits);
echo $num_items. "<br>";

//accessing array items : use square bracket with index number inside
echo $fruits[0]. "<br>";
echo $fruits[1]. "<br>";
echo $fruits[2]. "<br>";
echo $fruits[3]. "<br>";
echo $fruits[4]. "<br>";
echo $fruits[5]. "<br>";
echo $fruits[6]. "<br>";
echo $fruits[7]. "<br>";

echo "My favourite fruit is ".$fruits[0]." and ".$fruits[3]. "<br>";

//looping thru an indexed array : use foreach

foreach($fruits as $matunda){
    echo $matunda. "<br>";
}

// holiday assignment
// using a loop for loop , loop from 0 - 100 , if a number is a multiple of 3 echo 'fizz'
// if a number is a multiple of 5 echo 'buzz' if a number is a multiple of both 3 and 5 echo 'fizzbuzz' otherwise echo the number

for($y = 0;$y <= 100;$y++){
    if($y == 0){
        echo $y."It is not divisible by 3 or 5 <br>";
    }
    elseif($y %15==0){
        echo $y. "FIZZBUZZ <br>";
    }
    elseif($y % 3 == 0){
        echo $y. "FIZZ <br>";
    }
    elseif($y%5 == 0){
        echo $y. "BUZZ <br>";
    }
    elseif($y %15==0){
        echo $y. "FIZZBUZZ";
    }
    else{
        echo $y. "Not divisible by either 3 or 5 <br>";
    }
}

echo "<hr>";

//solution 1 to fizzbuzz
for ($x = 0 ; $x < 100; $x++){
//     $x start the loop
//    $x < 100 test condition
//    x++ increment value
    if ($x % 15 == 0){
        echo "$x FIZZBUZZ <br>";
    }elseif($x % 3 == 0){
        echo $x. "fizz <br>";
    }elseif($x % 5 == 0) {
        echo $x . "buzz <br>";
    }else{
        echo "$x <br>";
    }
}




//soln 2
for($i = 100;$i < 100; $i++){
    if($i % 3 == 0 and $i % 5 == 0){
        echo "Fizzbuzz <br>";
    }elseif($x % 3 == 0){
        echo $x. "fizz <br>";
    }elseif($x % 5 == 0) {
        echo $x . "buzz <br>";
    }else{
        echo "$x <br>";
    }
}









// foreach - loops through a block of code for each element in an array
 


for ($x = 0; $x < count($fruits); $x++){

	// echo out each item  by accessing them using index numbers

	echo $fruits[$x]. '<br>';

}

$num_fruits = count($fruits); //stores the number of items in the fruits array
for ($x = 0; $x < $num_fruits ; $x++){
	// echo out each item by accessing them using index numbers

	echo $fruits[$x]. '<br>';
}


// associative array : populating directly 
$geeks_fruits = array('Craig'=>'Mango','Steve'=>'Apple','Victor'=>'Mapera','Masoud'=>'Grapes');


$team_jerseys = array('Chelsea'=>'Blue','Man-U'=>'Red','Man-City'=>'Sky-blue','Tottenham'=>'White');


// associative array : populating one by one

$country_car_brand['Kenya'] = 'Nyayo';
$country_car_brand['Germany'] = array('Benz','BMW','VW');
$country_car_brand['US'] = ['Ford'];
$country_car_brand['Japan'] = array('Mitsubishi','Toyota');
$country_car_brand['China'] = ['Hyundai'];

//accessing associative array item : use the keys

//for loop soln
echo $country_car_brand['Kenya']."<br>";
for($x = 0;$x<count($country_car_brand["Germany"]);$x++){
    echo $country_car_brand["Germany"][$x]."<br>";
}

//foreach loop soln
foreach ($country_car_brand ['Germany'] as $gari1){
    echo $gari1. '<br>';
}





?>