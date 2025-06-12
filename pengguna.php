<?php 

require 'koneksi.php';
$sql = "SELECT * FROM pengguna";
$rows = $koneksi->query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna</title>
</head>
<body>
    <h1>Data Penguna</h1>

    <a href="index.php">Kembali</a>
    <a href="pengguna-tambah">Tambah Pengguna</a>

    <Table>
        <thead>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Role</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?=++$no?></td> 
                    <td><?=$row['nama']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['role']?></td>
                    <td>
                        <a href="pengguna-hapus.php?id=<?=$row['id+pengguna']?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </Table>
</body>
</html>