<?php
//complete php form
//algorithm
//1.create variables that will store the received data
$username = $first_name = $last_name = $email = $pass1 = $pass2 = $gender = '';

//2.create variables that will store the error message
$username_err = $first_name_err = $last_name_err = $email_err = $pass1_err = $pass2_err = $gender_err = '';
//3.check if the data is empty

//3.1 check the request method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //3.2 clean the data
    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $pass1 = safisha($_POST['pass1']);
    $pass2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
}
function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//3.3 check if the data is empty
//if true assign error message to respective error variables
if(empty($username)){
    $username_err = "Please fill in your username";
}
if(empty($first_name)){
    $first_name_err = "Please fill in your first name";
}
if(empty($last_name)){
    $last_name_err = "Please fill in your last name";
}
if(empty($email)){
    $email_err = "Please fill in your email";
}
if(empty($pass1)){
    $pass1_err = "Please fill in your password";
}
if(empty($pass2)){
    $pass2_err = "Please fill in your confirmed password";
}
if(empty($gender)){
    $gender_err = "Please fill in your gender";
}



echo "Details: username:$username , first name:$first_name , last name:$last_name , email:$email , password:$pass1 , confirm password:$pass2 , gender:$gender";
//assignment
//organize in form of a table



//check if pass1 and pass2 are matching
//if($pass1 != $pass2){
//    $pass1_err
//}

//4.display the data : soon store data in a database
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>REGISTER HERE...</h3>
        <label for="">Username</label>
        <input type="text"name="username"> <br>
        <span class="error" style="color:orangered"><?php echo $username_err?></span> <br>

        <label for="">First name</label>
        <input type="text"name="first_name"> <br>
        <span class="error" style="color:orangered"><?php echo $first_name_err?></span> <br>

        <label for="">Last name</label>
        <input type="text"name="last_name"> <br>
        <span class="error" style="color:orangered"><?php echo $last_name_err?></span> <br>

        <label for="">Email</label>
        <input type="email"name="Email"> <br>
        <span class="error" style="color:orangered"><?php echo $email_err?></span> <br>

        <label for="">Password</label>
        <input type="password"name="pass1"> <br>
        <span class="error" style="color:orangered"><?php echo $pass1_err?></span> <br>

        <label for="">Confirm password</label>
        <input type="password"name="pass2"> <br>
        <span class="error" style="color:orangered"><?php echo $pass2_err?></span> <br>

        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other

        <input type="submit">

    </fieldset>
</form>












