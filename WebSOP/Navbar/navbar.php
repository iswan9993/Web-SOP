<?php
$current = basename($_SERVER['PHP_SELF']);
$isAdmin = strpos($_SERVER['PHP_SELF'], 'admin') !== false;
$basePath = $isAdmin ? '../' : '';
?>
<link rel="stylesheet" href="<?= $basePath ?>../Style/navbar.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
<nav class="navbar">
    <div class="navbar-container">
        <div class="logo">
            <img src="https://www.rekrutmen-toedjoesinar.com/images/logo/TOEDJOE.svg" alt>
            <div class="garis-vertikal"></div>
            <li><a href="#">Pusat Bantuan</a></li>
        </div>
        <ul class="nav-links">

            <li><a href="<?= $basePath ?>admin/admin.php">Kebijakan Perusahaan</a></li>
            <!-- <li><a href="#">Tentang</a></li>
            <li><a href="#">Kontak</a></li> -->
        </ul>
        <!-- <div class="logout">
            <ul>
                <li><a href="#">Logout</a></li>
            </ul>
        </div> -->
    </div>
</nav>