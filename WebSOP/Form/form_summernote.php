<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/WEBSOP/Koneksi/koneksi.php');

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $divisi = mysqli_real_escape_string($conn, $_POST['divisi']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi_sop']);

    $query = "INSERT INTO tb_sop (judul, divisi, isi) VALUES ('$judul', '$divisi', '$isi')";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        echo "<script>alert('SOP berhasil disimpan!'); window.location.href='../Admin/index_admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan SOP: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}