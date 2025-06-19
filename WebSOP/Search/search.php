<?php
include '../koneksi/koneksi.php';

if (isset($_GET['keyword'])) {
    $judul = mysqli_real_escape_string($conn, $_GET['keyword']);

    $query = "SELECT * FROM tb_sop WHERE judul LIKE '%$judul%' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>Judul: " . htmlspecialchars($row['judul']) . "</h3>";
        echo "<p><strong>Divisi:</strong> " . htmlspecialchars($row['divisi']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($row['isi'])) . "</p>";
    } else {
        echo "<p><strong>SOP tidak ditemukan.</strong></p>";
    }
}
?>