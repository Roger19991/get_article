<?php

include '../db/db_connection.php';

$designation = $_POST['designation'];

$sql = "select * from produit ";
$statement = $con->prepare($sql);
$statement->execute();
$res =array();
while($row=$statement->fetch(PDO::FETCH_ASSOC))
{
    $res[] = $row;
}
echo json_encode($res);
    