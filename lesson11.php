<?php
//in development we usually need to store data collected from users of our systems
////my sql is the database base system used for both big and small businesses and it uses the sql (structured query language) to interact with data
////a database is made up of related tables
////
////
////before using the database you have to connect with it by providing the following info
////
////1. hostname
////2. username
////password
////database name
////
////
////php has helper functions that will make database interactions easy
////connecting to the database
///
/// credentials for connecting to a db
$hostname = 'localhost';
$username = 'root'; //always whendeveloping
$password = '';
$databasename = 'demo1';

//to connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean database

$connection = mysqli_connect($hostname,$username,$password,$databasename);
echo "<br>";
if($connection == false){
    echo "Connection not successful <br>";
//    echo mysqli_connect_error() ."<br>";
    die("error: ".mysqli_connect_error());
}
//
////create a database
//$sql = "CREATE DATABASE demo1"; //request/query to the db system
//
////make the request/execute  my sql query
//
//if(mysqli_query($connection,$sql)){
//    echo "Database created successfully";
//}else{
//    echo "ERROR : could not execute $sql" .mysqli_connect_error($connection);
//}
//

//inserting data into a db table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'jonte','john','kamau','johnn@gmail.com','john1234','male')";
if(mysqli_query($connection,$sql)){
    echo "Data inserted successfully <br>";
}else{
    echo "Data not inserted ".mysqli_error($connection);
}



























?>