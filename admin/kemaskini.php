<?php
    $idmakanan = $_GET['idmakanan'];
    $sql = "SELECT * FROM makanan WHERE idmakanan = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $idmakanan);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    ?>
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="idmakanan" value="<?php echo $row->idmakanan; ?>"/>
        <table>
            <tr>
                <td><label for="nama">Nama Makanan</label></td>
                <td>
                    <input id="nama" type="text" name="nama"
                           value="<?php echo $row->nama; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td>
                    <input id="harga" type="number" step="any" name="harga"
                           value="<?php echo $row->harga; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </fo
rm>