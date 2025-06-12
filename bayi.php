<?php 

require 'koneksi.php';

$sql = "SELECT * FROM bayi";
$babies = $koneksi->execute_query($sql)->fetch_assoc(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bayi</title>
</head>
<body>
    <h1>Data Bayi</h1>

    <a href="index.php">Kembali</a>
    <a href="bayi-tambah.php">Tambah Bayi</a>

    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($babies as $baby) ; ?>
            <tr>
                
            </tr>
        </tbody>
    </table>
</body>
</html>