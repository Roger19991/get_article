<?php

require_once 'db_config.php';
try{
     $con = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}catch(PDOException $e){
    die("could not connect to the database $dbname".$e->getMessage());
}

?>