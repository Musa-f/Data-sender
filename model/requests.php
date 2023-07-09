<?php


function insertInvoice($bdd, $intitule, $pu, $tva, $compte, $total){
    $stmt = $bdd->prepare("INSERT INTO factures_achats(intitule_achat, pu_achat, tva_achat, compte_achat, total_achat) VALUES (:intitule_achat, :pu_achat, :tva_achat, :compte_achat, :total_achat)");
    $stmt->execute(array(
        "intitule_achat" => $intitule,
        "pu_achat" => $pu,
        "tva_achat" => $tva,
        "compte_achat" => $compte,
        "total_achat" => $total
    ));

    $maxIdStmt = $bdd->prepare("SELECT LAST_INSERT_ID() AS maxId");
    $maxIdStmt->execute();
    $row = $maxIdStmt->fetch(PDO::FETCH_ASSOC);
    return $row['maxId'];
}



