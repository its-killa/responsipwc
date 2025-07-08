<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nomor_kk = $_POST['nomor_kk'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $query = "INSERT INTO warga (nama_lengkap, nomor_kk, nik, alamat, status) VALUES ('$nama', '$nomor_kk', '$nik', '$alamat', '$status')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Warga</title>
</head>
<body>
    <h1>Tambah Warga</h1>
    <form method="POST">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" required>
        <label>Nomor KK:</label>
        <input type="text" name="nomor_kk" required>
        <label>NIK:</label>
        <input type="text" name="nik" required>
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>
        <label>Status:</label>
        <select name="status">
            <option value="Kepala Keluarga">Kepala Keluarga</option>
            <option value="Anggota Keluarga">Anggota Keluarga</option>
        </select>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>