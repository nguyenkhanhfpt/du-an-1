<?php
    $host = 'localhost';
    $dbname = 'duan1';
    $usename = 'root';
    $password = '';

    try{
        $db = new PDO("mysql:host=$host;dbname=$dbname", $usename, $password);
    }
    catch (PDOException $err){
        echo $err->getMessage();
    }
    
?>