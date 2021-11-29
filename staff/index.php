<?php
require'../conn.php';

if(!isset($_SESSION['idstaff'])) header('location:../');
$idstaff =$_SESSION['idstaff'];

$sql = "SELECT staff_name FROM staff WHERE idstaff =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i',$idstaff);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($staff_name);
$stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
</head>
<body>
    <?php echo "Selamat Datang $staff_name";?>
    <p align="center"  >
    <a href="register.php">Register</a>
    </p>
    <table border="1" cellpadding="8" cellspacing="0" align="center" width="50%">
        <tr bgcolor="#fdf2c8">
            
            <th>Nama </th>
            <th>Nombor Identity Card </th>
            <th>katalaluan</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM contoh_login";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->nric; ?></td>
                    <td><?php echo $row->katalaluan; ?></td>
                    <td>RM <?php echo $row->cust_name; ?></td>
                    <td>
                        <a href="kemaskini.php?idpengguna=<?php echo $row->id_album; ?>">Edit</a>
                        |
                        <a href="delete.php?idpengguna=<?php echo $row->id_album; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                        |
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    
</body>
</html>