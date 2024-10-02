<?php

$servername = "projet1-docker-db-1";
$username = "root";
$password = "root"; 
$dbname = "test";    

try {
    $cnx = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    die("Connexion impossible : " . $e->getMessage());
}

