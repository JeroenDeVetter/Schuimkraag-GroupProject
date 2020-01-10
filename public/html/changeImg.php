<?php
include "../../src/Model/connection.php";


function updateImgName(){
    $sql ="SELECT biernaam from bier ";
    $stmt = openConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    var_dump($result);
    for ($i=0 ; $i<count($result); $i++){
        $noSpaces = str_replace(" ", "", $result[$i]->biernaam);
        $noCapitals = strtolower($noSpaces);
        $afbeelding = "../images/" . $noCapitals . ".png";
        $sql = "UPDATE bier SET etiketafbeelding=:afbeelding WHERE  biernaam=:biernaam ";
        $stmt=openConnection()->prepare($sql);
        $stmt->bindValue(':afbeelding', $afbeelding);
        $stmt->bindValue(':biernaam', $result[$i]->biernaam);

        $stmt->execute();
    }
}

//updateImgName();
