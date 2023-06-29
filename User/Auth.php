<?php
require_once '../db/db_connection.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if(isset($_POST['password']) && !empty($_POST['password'])){
    $pass=$_POST['password'];
    $stmt = $con->prepare("select * from utilisateur where password=?");
    $stmt->execute([$pass]);
    $user = $stmt->fetch();
    if($user){
        $sql = "SELECT nom, prenom, id FROM `utilisateur`";
        echo json_encode($user);
        // return $user;
    }else{
        echo json_encode($user);
    }
}
?>