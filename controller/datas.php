<?php

include("../model/conn.php");
include("../model/requests.php");


$data = json_decode(file_get_contents("php://input"), true);

$puAchat = htmlspecialchars($data['puAchat']);
$tvaAchat = htmlspecialchars($data['tvaAchat']);
$totalAchat = htmlspecialchars($data['totalAchat']);
$intituleAchat = htmlspecialchars($data['intituleAchat']);
$compteAchat = htmlspecialchars($data['compteAchat']);


// Insertion des données dans la base de données en utilisant le modèle
$invoiceId = insertInvoice($bdd, $intituleAchat, $puAchat, $tvaAchat, $compteAchat, $totalAchat);

// Création du tableau de réponse JSON
$response = [
    'invoiceId' => $invoiceId
];

echo json_encode($response);
