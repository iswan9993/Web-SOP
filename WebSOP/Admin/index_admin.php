<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search SOP | CV. TOEDJOE SINAR GROUP</title>
    <link rel="stylesheet" href="../Style/index_admin.css" />

</head>

<body class="wrapper">
    <?php include '../Navbar/navbar_admin.php'; ?>
    <?php include '../Form/form.php'; ?>

    <div class="content-area">
        <div class="main-content">
            <div class="teks-hai">
                <p>
                    Hai, ada yang bisa kami bantu?
                </p>
            </div>
            <section class="search-section">
                <form class="search-form" id="searchForm">
                    <input type="text" name="keyword" id="keyword" placeholder="Mencari..." required />
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </section>
        </div>
    </div>
    <div class="hasil-pencarian">
        <div class="bar-kiri">
            <div class="bar-kiri-item">
                <h4>Percetakan Samarinda</h4>
                <ul class="bar-list">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                    <li><a href="#">Bantuan</a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Status Order</a></li>
                </ul>
            </div>

        </div>
        <div class="bar-kanan">
            <div class="bar-kanan-item">
                <h2>
                    Judul
                </h2>
                <div class="bar-kanan-isi">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum qui id, dolores fugit similique
                        optio, ab eius obcaecati aliquam hic eligendi odio provident temporibus? Eaque error,
                        consequatur necessitatibus aperiam aspernatur laudantium libero minus. Nobis suscipit nihil quos
                        animi obcaecati odit, blanditiis rem possimus deserunt doloremque eos odio impedit commodi et.
                    </p>
                    <div class="gambar-isi">
                        <img src="../Assets/1.jpeg" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include '../Footer/footer_utama.php'; ?>




</html>