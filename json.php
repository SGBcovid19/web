<?php
header('Content-Type: application/json');

require_once("config.php");

$data = [ 
    "totalDonasi" => $jumlahDonasi,
    "lastUpdate" => $updateWaktu
];

$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;