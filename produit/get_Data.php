<?php

include '../db/db_connection.php';

    try{
        $res =array();
        $produits = array("produit" =>$res);
        $sql = "select * from produit ";

        $statement = $con->prepare($sql);
        $statement->execute();
        $nombreProduit = $statement->rowCount();
        
        while($row=$statement->fetch(PDO::FETCH_ASSOC))
        {
            $res[] = $row;
        }
        $produits = array("produit" =>$res);

        echo json_encode($produits);
    }catch(Exception $e){
        $e->getMessage();
    }




