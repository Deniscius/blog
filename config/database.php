<?php
$db_name = "blog";
$servername = "localhost";
$username = "root";
$password = "";

try {
    $myPDO=new PDO("mysql:host=$servername; dbname=$db_name; charset=utf8;port=3306". $password, $username);
    $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Erreur de connexion: " . $e->getMessage();
    }
?>