<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling dan Validation</title>
</head>
<body>

<?php
// Include file dengan logika PHP
include "process.php";
?>

<!-- Form HTML -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    NIM: <input type="text" name="nim" value="<?php echo isset($nim) ? $nim : ''; ?>">
    <span style="color: red;"><?php echo $pesan_error_nim; ?></span><br><br>

    Nama: <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
    <span style="color: red;"><?php echo $pesan_error_nama; ?></span><br><br>

    Email: <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
    <span style="color: red;"><?php echo $pesan_error_email; ?></span><br><br>

    Alamat: <input type="text" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>">
    <span style="color: red;"><?php echo $pesan_error_alamat; ?></span><br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Menampilkan data input di bawah formulir
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($pesan_error_nim) && empty($pesan_error_nama)) {
    echo "<h2>Your Input</h2>";
    echo "NIM: $nim<br>";
    echo "Nama: $nama<br>";
    echo "Email: $email<br>";
    echo "Alamat: $alamat<br>";
}
?>

</body>
</html>
