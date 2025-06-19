<?php
$current = basename($_SERVER['PHP_SELF']);
$isAdmin = strpos($_SERVER['PHP_SELF'], 'admin') !== false;
$basePath = $isAdmin ? '../' : '';
?>
<link rel="stylesheet" href="../Style/footer.css" />
<!-- Font Awesome 4 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer class="footer">
    <div class="induk">
        <div class="header-footer">
            <div class="logo">
                <img src="https://www.rekrutmen-toedjoesinar.com/images/logo/TOEDJOE.svg" alt>

            </div>
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>

            <div>

            </div>
        </div>
        <div>
            <h4>Metode Pembayaran</h4>
            <div class="bank-bri">
                <img src="../Assets/2.jpg" alt>
            </div>
        </div>
        <div>
            <h4>Percetakan Samarinda</h4>
            <ul class="sosmed-list">
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Syarat dan Ketentuan</a></li>
                <li><a href="#">Bantuan</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Karir</a></li>
                <li><a href="#">Status Order</a></li>
            </ul>
        </div>
        <div>
            <h4>Kontak</h4>
            <ul class="sosmed-list">
                <li><a href="#">Toedjoe Sinar Group</a></li>
                <li><a href="#">Phone 1 : 081148802015</a></li>
                <li><a href="#">Phone 2 : 081148507979</a></li>
                <li><a href="#">Email : toedjoesinargroup@gmail.com</a></li>
                <br>
                <li><a href="#">Open :</a></li>
                <li><a href="#">Senin - Sabtu : 08.00-22.00 WITA</a></li>
                <li><a href="#">Minggu : 10.00-17.00 WITA
                    </a></li>
            </ul>
        </div>

    </div>
</footer>