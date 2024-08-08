<?php
require "koneksi.php";

$stmt = ("SELECT * FROM tb_obat");
$hasil = $conn->query($stmt);
$data = $hasil->fetch_assoc();
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
        <table>
            <tr>
                <td>no</td>
            </tr>
            <?php
            foreach ($hasil as $data) { ?>

            <?php }
            ?>
        </table>
    </center>

</body>

</html>