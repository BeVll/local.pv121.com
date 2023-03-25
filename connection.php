<?php
$user = "root";
$pass="";
try {
    $dbh = new PDO("mysql:host=localhost;dbname=lesson1",$user, $pass);

}catch (Exception $ex){
    print "Error: ".$ex->getMessage();
}