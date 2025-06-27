<!-- Form/form_sop.php -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Style/form.css">

<div id="form-sop">
    <!-- Tombol X di pojok kanan atas -->
    <span id="close-button" class="close-btn">&times;</span>

    <h3>Form Tambah SOP</h3>
    <form id="sopForm" action="proses_sop.php" method="post">
        <label>Judul SOP:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Divisi:</label><br>
        <select name="divisi" required>
            <option value="">-- Pilih Divisi --</option>
            <option value="HRD">HRD</option>
            <option value="Produksi">Produksi</option>
            <option value="Marketing">Marketing</option>
        </select><br><br>

        <label>Isi SOP:</label><br>
        <textarea id="summernote" name="isi_sop"></textarea><br><br>

        <input type="submit" value="Simpan SOP">
        <button type="button" id="cancelButton">Cancel</button>
    </form>
</div>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script src="../js/form.js"></script>