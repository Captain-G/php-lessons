<?php
require 'config.php';
echo"<h1>Our products</h1>";
//query for selecting all records from table
$sql = "SELECT * FROM `products`";

//Store data from db in a variable called users
$users = mysqli_query($connection,$sql);

//loop through data from db
while ($row = mysqli_fetch_array($users)){
    echo '<div class="card">';
    $user_id = $row['id'];
   echo "<a href='details.php?id=$user_id'>";
    echo $row['id'];
    echo $row['name'];
    echo $row['price'];
    echo $row['color'];
    echo $row['description'];
    echo $row['condition'];
   echo "</a>";
   echo "<br>";
   echo "<a href='delete.php?=$user_id'>Delete</a>";
    echo '</div>';
    echo '<br>';
}


require 'footer.php';

?>
<a href="details.php?id=8">go</a>