<?php
// Inisialisasi variabel dengan nilai default
$nim = "12345";
$nama = "John Doe";
$email = "";
$alamat = "";
$pesan_error_nim = "";
$pesan_error_nama = "";
$pesan_error_email = "";
$pesan_error_alamat = "";

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];

    // Validasi form
    if (empty($nim)) {
        $pesan_error_nim = "* Kolom NIM wajib diisi";
    }

    if (empty($nama)) {
        $pesan_error_nama = "* Kolom Nama wajib diisi";
    }

    // Validasi lainnya bisa ditambahkan sesuai kebutuhan
}
?>
