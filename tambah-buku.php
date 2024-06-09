<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {
        $judul = $_POST["judul"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$judul', '$isbn', $unit 
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <h1>Form tambah data buku</h1>

    <form action="" method="POST">
        <label for="judul">Judul Buku</label>
        <input type="text" id="judul" name="judul">

        <br> <br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">

        <br> <br>
        <label for="unit">Unit</label>
        <input type="number" id="unit" name="unit">

        <br> <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form> <br>

    <a href="./buku.php">Kembali ke Daftar Buku</a> <br>
    <a href="./index.php">Kembali ke halaman Utama</a>
</body>
</html>