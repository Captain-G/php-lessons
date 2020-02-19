<?php
//connect to database
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';

$connection = mysqli_connect($hostname,$username,$password,$databasename);

if($connection == false){
    echo "Connection not successful<br>";
    die("ERROR:".mysqli_connect_error());
}


//complete php form
$name = $price = $color = $description = $condition = "";
$name_err = $price_err = $color_err = $description_err = $condition_err ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //3.2 clean data
    $name = clean($_POST['name']);
    $price = clean($_POST['price']);
    $color = clean($_POST['color']);
    $description = clean($_POST['description']);
    $condition = clean($_POST['condition']);
    //3.3 check if data is empty
    if(empty($name)){
        $name_err = "Please fill in the product name";
    }if(empty($price)){
        $price_err = "Please fill in the product price";
    }if(empty($color)){
        $color_err = "Please fill in the product color";
    }if(empty($description)){
        $description_err= "Please fill in the product's description";
    }if(empty($condition)){
        $condition_err = "Please fill in the condition of the product";
    }else{
        //inserting data into the table
        $sql = "INSERT INTO `products`(`id`, `name`, `price`, `color`, `description`, `condition`) VALUES (NULL ,'$name','$price','$color','$description','$condition')";
        if (mysqli_query($connection,$sql)){
            echo "Data inserted successfully";
        }else{
            echo "Data not inserted".mysqli_error($connection);
        }
    }
}
function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Products</h3>
        <label for="">Name</label><br>
        <input type="text" name="name"><br>
        <span class="error" style="color: rebeccapurple"><?php echo $name_err ?></span><br>

        <label for="">Price</label><br>
        <input type="text" name="price"><br>
        <span class="error" style="color: rebeccapurple"><?php echo$price_err ?></span><br>

        <label for="">Color</label><br>
        <input type="text" name="color"><br>
        <span class="error" style="color: rebeccapurple"><?php echo $color_err ?></span><br>

        <label for="">Description</label><br>
        <input type="text" name="description"><br>
        <span class="error" style="color: rebeccapurple"><?php echo $description_err ?></span><br>

        Condition:
        <input type="radio" name="condition" value="good">Good
        <input type="radio" name="condition" value="fair">Fair
        <input type="radio" name="condition" value="bad">Bad<br>
        <span class="error" style="color: rebeccapurple"><?php echo $condition_err ?></span><br>
        <button type="submit">Submit</button>
    </fieldset>
</form>

