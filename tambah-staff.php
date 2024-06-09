<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telpon = $_POST["telpon"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$nama', '$telpon', '$email' 
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH Staff</title>
</head>
<body>
    <h1>Form tambah data staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br> <br>
        <label for="telpon">Telpon</label>
        <input type="text" id="telpon" name="telpon">

        <br> <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <br> <br>
        <button type="submit" name="submit">SUBMIT</button> 
    </form> <br>
    
    <a href="./staff.php">Kembali ke Daftar Staff</a> <br>
    <a href="./index.php">Kembali ke halaman Utama</a>
</body>
</html>