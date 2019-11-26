<?php
$host = 'localhost';
$username = 'root'; #root
$mydatabase = 'Coffee';
$password = ''; #blank

try{
    $conn = new PDO("mysql:host = {$host}; dbname = {$mydatabase} ", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>

