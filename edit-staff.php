<?php
    include_once("./connect.php");

    $id = $_GET ["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telpon = $_POST["telpon"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telpon='$telpon', email='$email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
</head>
<body>
    <h1>Form edit data staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" type="text" id="nama" name="nama">

        <br> <br>
        <label for="telpon">Telpon</label>
        <input value="<?php echo $staff['telpon'] ?>" type="text" id="telpon" name="telpon">

        <br> <br>
        <label for="email">Email</label>
        <input value="<?php echo $staff['email'] ?>" type="email" id="email" name="email">

        <br> <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form> <br>

    <a href="./staff.php">Kembali ke Daftar Staff</a> <br>
    <a href="./index.php">Kembali ke halaman Utama</a>
</body>
</html>