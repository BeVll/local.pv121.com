<?php


    $user = "root";
    $pass="";
    $dbh = new PDO("mysql:host=localhost;dbname=lesson1",$user, $pass);
        $id = $_GET['id'];
        $name = $_REQUEST['name'];
        $image = $_REQUEST['image'];
        $description = $_REQUEST['description'];
    
    $sql = "UPDATE categories SET name='$name', image='$image', description='$description' WHERE id='$id'";

    if($dbh->query($sql)){
        header('Location: ' . '/');
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($dbh);
    }
    

?>