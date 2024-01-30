<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/assets/logo/logoAutomasterBulat.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> Automaster Bengkel</title>

    <!-- ----- My CSS ----- -->
    <link rel="stylesheet" href="/assets/css/stylePages.css">

    <!-- BOX ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- -- AOS --- -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="/"><img class="logoNav" src="/assets/logo/logoAutomasterBengkel.png" alt=""></a>

            <!-- Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>

            <!-- Nav List -->
            <ul class="navbar">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/">Services</a></li>
                <li><a href="/">Article</a></li>
                <li><a href="/career">Career</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <img src="assets/logo/logoAutomasterBulat.png" alt="">
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">About Us</a>
                <a href="#">Promo</a>
                <a href="#">Article</a>
                <a href="#">Career</a>
                <a href="#">Shop</a>
            </div>
            <div class="footer-box">
                <h3>Location</h3>
                <a href="https://maps.app.goo.gl/DZP8BfgH3qahtWqZ8" target="_blank">
                    <h2>Automaster Antapani</h2>
                    <p>Jl.Terusan Jakarta No.118 Kota Bandung</p>
                </a>
                <br>
                <a href="https://maps.app.goo.gl/qYRaU5WfPP4BSonq5" target="_blank">
                    <h2>Automaster Veteran</h2>
                    <p>Jl.Veteran No.21 Kota Bandung</p>
                </a>
                <br>
                <a href="https://maps.app.goo.gl/cfEcPUhnHHvqCMWR8" target="_blank">
                    <h2>Automaster Bojongsong</h2>
                    <p>Jl.Terusan Bojongsoang No.97 Kabupaten Bandung</p>
                </a>
            </div>
            <div class="footer-box">
                <h3>Contact Us</h3>
                <a href="tel:02287242079" target="_blank">02287242079 (Office)</a>
                <a href="https://wa.me/081222246849" target="_blank">081222246849 (WhatApps)</a>
                <a href="mailto: info@automasterbengkel.com" target="_blank">info@automasterbengkel.com</a>
                <div class="social" style="margin-top: 15px;">
                    <a href="https://www.instagram.com/automasterbengkel/" target="_blank"><i class="bx bxl-instagram" style="color: var(--bg-color); font-size:25px"></i></a>
                    <a href="https://www.instagram.com/automasterbengkel/" target="_blank"><i class="bx bxl-facebook" style="color: var(--bg-color); font-size:25px"></i></a>
                    <a href="" target="_blank"><i class="bx bxl-twitter" style="color: var(--bg-color); font-size:25px"></i></a>
                    <a href="https://www.tiktok.com/@automasterbengkel" target="_blank"><i class="bx bxl-tiktok" style="color: var(--bg-color); font-size:25px"></i></a>
                    <a href="https://www.youtube.com/@AutomasterTV" target="_blank"><i class="bx bxl-youtube" style="color: var(--bg-color); font-size:25px"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="copyright-content">
        <h4>Copyright © 2024 Automaster Bengkel</h4>
        <h4>Designed By <a href="https://instagram.com/dorionsix" target="_blank">
                NSO Project
            </a></h4>
    </div>

</body>

<script src="/assets/js/app.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>