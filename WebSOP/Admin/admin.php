<?php
include '../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $divisi = $_POST['divisi'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $query = "INSERT INTO tb_sop (divisi, judul, isi) VALUES ('$divisi', '$judul', '$isi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('SOP berhasil disimpan'); window.location='input_sop.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan SOP');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input SOP - CV. TOEDJOE SINAR GROUP</title>
    <link rel="stylesheet" href="../Style/style_index.css" />
    <link rel="stylesheet" href="../Style/admin_style.css" />
</head>

<body>
    <?php include '../Navbar/navbar.php'; ?>
    <div class="form-container">
        <h2>Form Input SOP</h2>
        <form method="POST" action>
            <label for="divisi">Divisi</label>
            <select name="divisi" required>
                <option value>-- Pilih Divisi --</option>
                <option value="percetakan">Percetakan</option>
                <option value="editor">Editor</option>
                <option value="postpress">Postpress</option>
            </select>

            <label for="judul">Judul SOP</label>
            <input type="text" name="judul" required placeholder="Contoh: Prosedur Operasi Mesin">

            <label for="isi">Isi SOP</label>
            <textarea name="isi" rows="8" required placeholder="Masukkan isi SOP..."></textarea>

            <button type="submit">Simpan SOP</button>
        </form>
    </div>

</body>

</html>