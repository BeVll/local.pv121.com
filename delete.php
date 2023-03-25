<?php


    $user = "root";
    $pass="";
    $dbh = new PDO("mysql:host=localhost;dbname=lesson1",$user, $pass);
        $id = $_GET['nomer'];
 
    $sql = "DELETE from categories WHERE id='$id'";
    

    if($dbh->query($sql)){
        header('Location: ' . '/');
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($dbh);
    }
    

?>