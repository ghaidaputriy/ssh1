<?php
session_start();

if (!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>-
    Nama : Ghaida Putri Yunisa <br>
    NPM : 2210631170022 <br>
    Kelas : 4C - Informatika <br>

    <h1>Aplikasi Perpustakaan</h1>
    <a href="./buku.php">Lihat Daftar Buku</a> <br>
    <a href="./staff.php">Lihat Daftar Staff</a>
</body>
</html>