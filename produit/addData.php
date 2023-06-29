<?php

    require_once '../db/db_connection.php';
    // require_once 'funtion.php';
    
    $produit = json_decode($_POST['produit']);
    $prix =  json_decode($_POST['prix_achat']);
    $date = date("Y-m-d H:i:s");
    $dateP = date("Y-m-d");
  //  $res = $prix;

    try {
   
            $sql = 'INSERT INTO produit(designation, quantite, prixUnitaire, code, qte_seuil, description, slug, file) VALUES(:designation, :quantite, :prixUnitaire, :code, :qte_seuil, description, slug, file)';
            $statement = $con->prepare($sql);
           
        header('Content-Type: application/json');
       
        // $produit->id = strVal($last_id);
        echo json_encode($produit);
    }catch(MySQLException $e){
        $e->getMessage();
    }
   
?>