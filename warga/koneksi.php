<?php
$host = "localhost";
$user = "root"; // Ganti sesuai username MySQL Anda
$password = ""; // Ganti dengan password MySQL jika ada
$dbname = "rt";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>