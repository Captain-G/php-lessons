<?php
//some preedefined variables in php are superglobals which means that
//they are always accessible regardless of scope and you can access them from any function class or file
//without having to do anything special

//the php superglobals are
//globals
//_server
//request
//post
//get
//files
//env
//cookie
//session

//globals

//are built in variables that are always available in all scopes
//globals is used to access global variables
//from anywhere in php script and also from within functions or methods
//php stores all global variables in an array called $globals(index)
//the index holds the name of the variable

$globals['name'] = "John" ;
$x = 75;
$y = 25;

$globals['sum'] = $x + $y;

//_server
//it holds info about headers, paths, and script location




//to find file location use element 'PHP_SELF' in $_server
$phpfilepath = $_SERVER{'PHP_SELF'};
echo $phpfilepath. "<br>";







//get server name
$servername = $_SERVER['SERVER_NAME'];
echo $servername;


//get request method
$request_method = $_SERVER['REQUEST_METHOD'];
echo "REQUEST METHOD:".$request_method. "<br>";





//request : we need a form for this
$get_name = $_REQUEST['jina'];
$get_email = $_REQUEST['email'];
echo"$get_name <br>";
echo"$get_email <br>";
echo "
    <form action='lesson8.php' method='post'>
    <label for=''>Username</label>
    <input type='text' name='jina'>
    <br><br>
    <form action='lesson8.php' method='post'>
    <label for=''>Email</label>
    <input type='email' name='email'>
    <button type='submit'>Send data</button>
</form>
"















?>