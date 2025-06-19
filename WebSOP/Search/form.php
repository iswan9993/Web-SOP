<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail SOP</title>
    <link rel="stylesheet" href="../Style/form_style.css" />
</head>

<body>
    <div class="form-tampilan">
        <h2>Judul SOP: <?= isset($_GET['judul']) ? htmlspecialchars($_GET['judul']) : 'Tidak ada judul' ?></h2>

        <p class="label">Divisi: <?= isset($_GET['divisi']) ? htmlspecialchars($_GET['divisi']) : 'Tidak ada divisi' ?>
        </p>
        <hr>

        <p>
            <?= isset($_GET['isi']) ? nl2br(htmlspecialchars($_GET['isi'])) : 'Isi SOP tidak tersedia.' ?>
        </p>
    </div>
</body>

</html>