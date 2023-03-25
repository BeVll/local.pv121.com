<?php
include($_SERVER["DOCUMENT_ROOT"] . "/connection.php")
    $id = $_GET['nomer'];
    $sql = "DELETE from categories WHERE id='$id'";
    

    if($dbh->query($sql)){
        header('Location: ' . '/');
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($dbh);
    }
    

?>