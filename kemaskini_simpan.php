<?php
require 'conn.php';

$idmakanan = $_POST['idmakanan'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

$sql = "UPDATE makanan SET nama = ?, harga = ? WHERE idmakanan = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sdi', $nama, $harga, $idmakanan);
$stmt->execute();

if ($mysqli->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}