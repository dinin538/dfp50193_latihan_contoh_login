<?php
require 'conn.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];

$sql = "INSERT INTO makanan (nama, harga) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sd', $nama, $harga);
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
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpan</title>
</head>
<body>
<?php
require 'conn.php';

$cust_name = $_POST['cust_name'];
$nric = $_POST['nric'];


$sql = "INSERT INTO senaraipelajar (staff_name, nric) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si',$cust_name, $nric);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama Customer tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}
?>
</body>
</html>