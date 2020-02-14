<?php

//loops
//we use loops to execute a block of code again and again as long as a certain condition is true

//
//in php we have the following loop types
//while - loops thru a block of code as long as the specified condition is true


//syntax
//while(condition){
//    code to execute
//}
$count = 0;
while($count < 20){ //first checks if the condition is true
    if($count == 0){
        echo $count. "Not divisible by three";
    }
    elseif($count % 3 == 0){
        echo $count. "Divisible by three <br>";
    }
    else{
        echo $count."Not divisible by three <br>";
    }
 '<br>';
    echo "<br>";
    $count ++;
}

//$count : initializes the loop counter and sets the start value
//$count < 20 : continue the loop as long as $count is less than 20
//
//





//do...while - loops thru a block of code once and then repeats the loop as long as the specified

//syntax

//do{
//    code to execute
//}
//while(condition is true)

$x = 0;
do{
    echo "<div style='border:2px solid red;'>
    <p>$x</p>
          </div>";
    $x ++;
}
while($x < 10);


//for - loops thru a block of code a specified number of times


//syntax
//for(initial_value;text_value;increment_value){
//    code to be executed
//}
//initial value - determines the start of a loop
//text value - evaluated for each loop iteration. if it evaluates to true the loop continues
//if it evaluates to false the loops end
//increment value - increases the loop counter value
//foreach - loops thru a block of code for each element in an array

for($x = 0;$x < 10;$x+=2 ){
   echo "<span>Value : </span> <br>" . $x;
}

//assignment
//from 0 - 100
//divisible by3 - freeze
//div by 5 - bars
//div by both - freeze bars

$y = 0;
for($y = 0;$y < 100;$y+=3){
    echo "freeze" . $y;
    echo "<br>";
}

for($y = 0;$y < 100;$y+=5){
    echo "bars" . $y;
    echo "<br>";
}


$y = 0;
for($y = 0;$y < 100;$y+=3){
    echo "freeze" . $y;
    echo "<br>";
}

for($y = 0;$y < 100;$y+=5){
    echo "bars" . $y;
    echo "<br>";
}








//foreach - loops thru a block of code for each element in an array













































?>