<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT id_pengguna, nama, password, role FROM pengguna WHERE username = ? AND password = ?';
    $row = $koneksi->execute_query($sql, [$username])->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['id_pengguna'] = $row['id_pengguna'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Posyandu</title>
</head>
<body>
    <h1>Login Posyandu</h1>

    <form action="" method="post">
        
    </form>
</body>
</html>