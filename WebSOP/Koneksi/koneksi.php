<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";      
$pass = "";          
$db   = "db_sop";    

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$base_url = '/websop';
?>