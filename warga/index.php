<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Data Warga RT</title>
</head>
<body>
    <h1>Aplikasi Data Warga RT</h1>
    <a href="tambah.php">Tambah Warga</a>
    <input type="text" id="search" placeholder="Cari berdasarkan nama" onkeyup="searchFunction()">
    
    <table id="wargaTable">
        <tr>
            <th>Nama Lengkap</th>
            <th>Nomor KK</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM warga";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['nama_lengkap']}</td>
                <td>{$row['nomor_kk']}</td>
                <td>{$row['nik']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['status']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='delete.php?id={$row['id']}'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>

    <script>
        function searchFunction() {
            let input = document.getElementById('search').value;
            input = input.toLowerCase();
            let rows = document.querySelectorAll('#wargaTable tr');

            rows.forEach(row => {
                if (row.innerText.toLowerCase().includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>