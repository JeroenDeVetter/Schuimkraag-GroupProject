<?php
include "connection.php";

$bierId= $_REQUEST["q"];
$sql = "SELECT * FROM bier WHERE bier_ID=:bierId";
$stmt =  openConnection()->prepare($sql);
$stmt->bindValue(":bierId", $bierId);
$stmt->execute();


$result = $stmt->fetch(PDO::FETCH_OBJ);
header('Content-type: application/json;charset=utf-8');
echo json_encode($result,JSON_UNESCAPED_UNICODE); // Parse to JSON and print.


exit();

?>
