<?php 
require_once("../connection.php");

$id=isset($_GET["id"])?$_GET["id"]:0;
$sql="SELECT * FROM news WHERE id=?";

$statement=$pdo->prepare($sql);
$statement->execute(array($id));
$results=$statement->fetchAll();
$rs=$results[0];

header("Content-Type: application/json");
echo json_encode($rs);
?>