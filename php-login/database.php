<?php

$server ='localhost:3307';
$userName = 'root';
$password = ' ';
$database = 'php_login_database';

try{
    $coon = new PDO("mysql:host=$server; dbname=$database;", $userName,$password);

} catch (PDOException $e){
    
die('Connected Failed: '.$e->getMessage());
}
























?>