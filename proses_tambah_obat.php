<?php
require  "koneksi.php";
if (
    $_POST['nama_perusahaan']  && $_POST['namaobat']
    && $_POST['kategoriobat'] && $_POST['hargajual']
    && $_POST['hargabeli'] && $_POST['stokobat']
    && $_POST['keterangan']
) {
    global $conn;
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $id = $conn->prepare("SELECT id_supplier FROM tb_supplier WHERE perusahaan = ? ");
    $id->bind_param('s', $nama_perusahaan);
    $id->execute();
    $stmt = $id->get_result();
    $data = $stmt->fetch_assoc();

    if (!$data['id_supplier']) {
        echo "<script>alert('id supplier tidak ada')</script>";
        echo "<script>window.location.href='tambah_obat.php'</script>";
    } else {
        $id_supplier =   $data['id_supplier'];
        $namaobat =     $_POST['namaobat'];
        $kategoriobat = $_POST['kategoriobat'];
        $hargajual =    $_POST['hargajual'];
        $hargabeli =    $_POST['hargabeli'];
        $stokobat =     $_POST['stokobat'];
        $keterangan =   $_POST['keterangan'];
        $stmt_insert = $conn->prepare('INSERT INTO tb_obat (id_supplier,namaobat,kategoriobat,hargajual,hargabeli,stok_obat,keterangan) VALUES(?,?,?,?,?,?,?)');
        $stmt_insert->bind_param('issddis', $id_supplier, $namaobat, $kategoriobat, $hargajual, $hargabeli, $stokobat, $keterangan);

        if ($stmt_insert->execute()) {
            echo "<script>alert('Berhasil memasukan data')</script>";
            echo "<script>window.location.href='tambah_obat.php'</script>";
        } else {
            echo "<script>alert('gagal memasukan data')</script>";
            echo "<script>window.location.href='tambah_obat.php'</script>";
        }
    }
} else {
    echo "<script>alert('mohon input data dengan benar')</script>";
    echo "<script>window.location.href='tambah_obat.php'</script>";
}
