<?php
    $servername = 'localhost';
    $dbname = 'datasender';
    $username = 'root';
    $password = '';

    try{
        $bdd = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
