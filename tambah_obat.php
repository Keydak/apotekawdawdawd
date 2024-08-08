<?php
require "koneksi.php";

$stmt = ("SELECT * FROM tb_obat");
$hasil = $conn->query($stmt);


$stmt2 = ("SELECT perusahaan FROM tb_supplier");
$hasil2 = $conn->query($stmt2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <center>

        <form method="POST" action="proses_tambah_obat.php" autocomplete="off">
            <table>
                <tr>
                    <td>id_supplier</td>
                    <td><input list="nama_perusahaan" type="text" name="nama_perusahaan"></td>
                    <datalist id="nama_perusahaan">
                        <?php
                        foreach ($hasil2 as $data_display2) { ?>

                            <option value="<?php echo ($data_display2['perusahaan']) ? $data_display2['perusahaan'] : ''; ?>">
                                 </option>
                            

                            <?php } ?>
                    </datalist>
                </tr>
                <tr>
                    <td>nama_obat</td>
                    <td><input type="text" name="namaobat"></td>
                </tr>
                <tr>
                    <td>kategori_obat</td>
                    <td><input type="text" name="kategoriobat"></td>
                </tr>
                <tr>
                    <td>harga_jual</td>
                    <td><input type="number" name="hargajual" id="hargajual"></td>
                </tr>
                <tr>
                    <td>harga_beli</td>
                    <td><input type="number" name="hargabeli"></td>
                </tr>
                <tr>
                    <td>stok_obat</td>
                    <td><input type="number" name="stokobat"></td>
                </tr>
                <tr>
                    <td>keterangan</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit" style="float: right;">submit</button>
                    </td>
                </tr>
            </table>


        </form>
    </center>
    <script>
        var awok = document.getElementById('hargajual');
        awok.replace
    </script>
</body>

</html>