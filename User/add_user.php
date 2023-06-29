<?php

    include '../db/db_connection.php';
    header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    $user = json_decode($_POST['user']);
    
    $sql = 'INSERT INTO utilisateur(nom, prenom, password, type, email, telephone, instagram, a_propos) VALUES(:nom, :prenom, :password, :type, :email, :telephone, :instagram, :a_propos)';
    $statement = $con->prepare($sql);
    $statement->execute((array) $user);


   // echo json_encode($row);
?>
