<?php
include "../../src/Model/local.php";

$bierId= $_REQUEST["q"];
$sql = "SELECT * FROM bier WHERE bier_ID=:bierId";
$stmt =  openConnection()->prepare($sql);
$stmt->bindValue(":bierId", $bierId);
$stmt->execute();

//$result = $stmt->fetch(PDO::FETCH_ASSOC);
$result = $stmt->fetch(PDO::FETCH_OBJ);
//var_dump($result);
header('Content-type: application/json;charset=utf-8');
echo json_encode($result, JSON_UNESCAPED_UNICODE); // Parse to JSON and print.

//echo json_encode($result);
//echo json_last_error_msg(); // Print out the error if any
exit();
//die(); // halt the script

//exit();
//echo '{"<strong>alcoholpercentage</strong>: " . $result["alcoholgehalte"]}';
?>
