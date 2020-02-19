<?php
//fetch data from db using the received id($user_id)
require 'header.php';
require 'config.php';

//grab id:use $_GET[]
if (isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
}
$sql = "SELECT * FROM `products` WHERE 1";
$user = mysqli_query($connection, $sql);
//create associative array to split data into column titles and actual values:use mysqli_fetch_assoc
$row = mysqli_fetch_assoc($products);
echo "<div class='card'>";
echo $row['name']."<br>";
echo $row['price']."<br>";
echo $row['color']."<br>";
echo $row['description']."<br>";
echo $row['condition']."<br>";


echo "</div>";






require 'footer.php';












?>

