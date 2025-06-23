<?php 

session_start();

$host ='localhost';
$db = "rental";
$user ='root';
$password ='';




try{
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
}catch(Exception $e){
    echo"Table is not created";
}


?>