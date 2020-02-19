<?php

if(empty($name)){
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




