<?php

require_once '../db/db_connection.php';
$id = $_POST['id'];


    try {
        $sql = "delete from produit where  id ='".$id."'";
        $statement = $con->prepare($sql);
        $statement->execute();
    } catch (MySQLException $e) {
        $e->getMessage();
    }
    
?>