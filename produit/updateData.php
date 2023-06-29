<?php

    require_once '../db/db_connection.php';
    
    $id=$_POST['id'];
    $code=$_POST['code'];
    $quantite=$_POST['quantite'];
    $prixUnitaire=$_POST['prixUnitaire'];
    $designation=$_POST['designation'];
    

    $qte_seuil=$_POST['qte_seuil'];
    $prix =  $_POST['prix_achat'];

    try{
        $date = date("Y-m-d H:i:s");

        $sql = "update produit set designation='".$designation."',prixUnitaire='".$prixUnitaire."',code='".$code."',qte_seuil='".$qte_seuil."',description='".$description."',slug='".$slug."',file='".$file."' where id ='".$id."'";

        
        $statement = $con->prepare($sql);
        $statement->execute();


        $result = array("success"=>true);
        echo json_encode($result);
    }catch(Exception $e){
        $result = array("unssuccess"=>false);
        echo json_encode($result);
        $e->getMessage();
    }
?>