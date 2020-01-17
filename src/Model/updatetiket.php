<?php
require '../../src/Model/connection.php';
for ($i=1; $i<36 ; $i++){
    $sql1 = "SELECT etiketafbeelding FROM bier WHERE bier_ID=:bierId";
    $stmt =  openConnection()->prepare($sql1);
    $stmt->bindValue(":bierId", $i);
    $stmt->execute();
    $result1 = $stmt->fetch(PDO::FETCH_OBJ);
    $path= substr($result1->etiketafbeelding,10);
    $sql2 = "UPDATE bier SET etiketafbeelding=:path WHERE bier_ID=:bierId";
    $stmt2 =  openConnection()->prepare($sql2);
    $stmt2->bindValue(":path", $path);
    $stmt2->bindValue(":bierId", $i);
    $stmt2->execute();
}
ECHO "finish";
