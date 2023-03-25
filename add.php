<?php 
    $user = "root";
    $pass="";
    $dbh = new PDO("mysql:host=localhost;dbname=lesson1",$user, $pass);
    // collect value of input field
    $name = $_REQUEST['name'];
    $image = $_REQUEST['image'];
    $description = $_REQUEST['description'];

    $sql = "INSERT INTO categories (name, image, description) VALUES ('$name',
            '$image','$description')";

    if($dbh->query($sql)){
        header('Location: ' . '/');
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($dbh);
    }
    
    // Close connection
  


?>