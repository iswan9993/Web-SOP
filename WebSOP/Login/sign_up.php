<!DOCTYPE html>
<html lang="en">
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/WEBSOP/Koneksi/koneksi.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/sign_up.css">
</head>

<body>
    <div class="kontainer-utama">
        <div class="bar-kiri">

            <div class="logo-unmul">
                <img src="<?= $base_url ?>/Assets/Universitas Mulawarman.png">
            </div>

            <div class="teks">
                <div class="teks-dalam">
                    <h3> Welcome Back!</h3>
                    <div class="teks-personal">
                        <p>To keep connected with us please</p>
                        <p>login with your personal info </p>
                    </div>
                    <div class="atur-button">
                        <button onclick="window.location.href='sign_in.php'">SIGN IN</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar-kanan">
            <div class="bar-kanan-atas">
                <div class="create-acount">
                    <h3>Create Acount</h3>
                </div>
                <div class="google-button">
                    <a href="#" class="google-icon-only">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Login">
                    </a>
                </div>
                <div class="google-teks">
                    <p>Or use your email for registration</p>
                </div>
            </div>
            <div class="bar-kanan-tengah">
                <div class="group-bar">
                    <img src="<?= $base_url ?>/Assets/user-username.png" class="name-icon">
                    <input type="text" placeholder="Name">
                </div>
                <div class="group-bar">
                    <img src="<?= $base_url ?>/Assets/email.png" class="email-icon">
                    <input type="text" placeholder="Email" id="email">
                </div>
                <span id="email-error">Email tidak valid</span>
                <div class="group-bar">
                    <img src="<?= $base_url ?>/Assets/padlock.png" class="icon-kiri">
                    <input type="password" placeholder="Password" id="password">
                    <img src="<?= $base_url ?>/Assets/eye_tutup.png" class="icon-kanan" id="eye-close"
                        onclick="togglePassword()">
                    <img src="<?= $base_url ?>/Assets/eye_buka.png" class="icon-kanan" id="eye-open"
                        onclick="togglePassword()">
                </div>
            </div>
            <div class="bar-kanan-bawah">
                <button id="signup-btn" type="submit" disabled>SIGN UP</button>
            </div>
        </div>

    </div>
    <script src="../js/sign_up.js"></script>

</body>

</html>