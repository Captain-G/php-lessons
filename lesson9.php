<?php

//php $_POST is a php superglobal variable which is used to collect form data
//after submitting a html form with method="post"
//$_POST is also widely used to pass variables
//receive form data using post requsts / $_POST[] superglobal


//receive data
//declare variables to store sent data
$name = '';
$email = '';

//check the request method : get or post : use $_SERVER
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    if the method is post grab data using the $_post superglobal
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = false;
    if(empty($name)){
        $error = true;
        echo "<p style='color:red'>Please fill in your name</p>";
    }
    if(empty($email)){
        $error = true;
        echo "<p style='color:red'>Please fill in your email</p>";
    }
    else{
        $name = safisha($name);
        $name = safisha($name);
        echo "<p style='color:green'>Your name is $name and email is $email</p> <br>";
    }
//    if(!$error){
////        the exclamation before error means false
//        //    print the data
//        echo "<p style='color:green'>Your name is $name and email is $email</p> <br>";
//    }
    }

//validating / cleaning data
//1 to remove unwanted space use : trim()
//2. to remove backslashes use stripslashes()

//create a function to clean data
function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}







?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
    <h3>Fill in the form</h3>
    <input type="text"name="jina"placeholder="Enter name"> <br>
    <input type="text"name="arafa"placeholder="Enter email">
    <button type="submit">Submit</button>
<!--    name: is the key of a value entered in a form-->
<!--    this will result to an associative array of this format-->

    <?php
        $_POST = array("jina" => "John", "arafa" => "john@gmail.com")
    ?>

</form>

<!---->
<!--//$_GET : used to collect data from a form just like $_POST-->
<!--//collect data sent via the url-->
<!--//get is used with data that is not sensitive at all-->
<!---->

<?php
//<!--grabbing data sent via get-->

//errors errors errors meehn
//$the_name = $_GET['name'];
//$the_age = $_GET['age'];
//$the_country= $_GET['country'];
//echo "Your details:Name:$the_name",Age $the_age,Country:$the_country";
//?>
//<a href="lesson9.php?name=gachuki&age=19&country=Kenya">Send detail</a>



