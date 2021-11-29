<?php
require 'conn.php';

$idmakanan = $_GET['idmakanan'];

$sql = "DELETE FROM makanan WHERE idmakanan = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $idmakanan);
$stmt->execute();

header('location: index.php')
;