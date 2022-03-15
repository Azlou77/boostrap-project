<?php
 $test_host = 'localhost';
 $test_bd = 'crud';
 $test_username = 'root';
 $test_password = '';
 /* we create a new instance of the class,
 and specify the drivers
 , database name, username, and password */
 $con_pdo = new PDO("mysql:host=$test_host;dbname=$test_bd",$test_username,$test_password);

try {
 $con_pdo = new PDO("mysql:host=$test_host;dbname=$test_bd",$test_username,$test_password);
 $con_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } 
catch(PDOException $e) 
{
 echo 'ERROR: ' . $e->getMessage();

 }
?>