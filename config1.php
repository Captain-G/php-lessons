<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';


$connection = mysqli_connect($hostname,$username,$password,$databasename);

if($connection == false){
    echo "Connection not successful <br>";
    die("ERROR:".mysqli_error());
}

?>