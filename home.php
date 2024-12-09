<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="gg.png" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="g2.png" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="g3.png" alt="Slide 3">
            </div>
        </div>
        <div class="slider-nav">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>

    <div class="container">
        <h1>WELCOME TO RIDHOKECOT HOBBY STORE</h1>
        <a href="list.php" class="btn">list Gunpla Ready </a>
    </div>

    <div class="catalog">
        <!-- Card 1 -->
        <div class="card">
            <img src="zeta.png" alt="Barang 1">
            <div class="card-body">
                <h3 class="card-title">HGUC ZETA</h3>
                <p class="card-text">Gundam HG Universal Century - MSZ-006A1 zeta.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
            <img src="fr.png" alt="Barang 2">
            <div class="card-body">
                <h3 class="card-title">HGCE Freedom</h3>
                <p class="card-text">Gundam HGCE ZGMF-X10A Freedom.</p>
                <a href="lsit.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
            <img src="jus.png" alt="Barang 3">
            <div class="card-body">
                <h3 class="card-title">HGCE Infinite Justice Type II</h3>
                <p class="card-text">Gundam HG ZGMF-X191M2 Infinite Justice Gundam Type II.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="card">
            <img src="mg.jpg" alt="Barang 4">
            <div class="card-body">
                <h3 class="card-title">RX-78-2 Gundam</h3>
                <p class="card-text">Gundam MG RX-78-2 ver 3.0.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="card">
            <img src="ex.jpg" alt="Barang 5">
            <div class="card-body">
                <h3 class="card-title">Gundam HG00 Exia</h3>
                <p class="card-text">Gundam 00 HG GN-001 Exia.</p>
                <a href="lst.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="card">
            <img src="ba.jpg" alt="Barang 6">
            <div class="card-body">
                <h3 class="card-title">Gundam Barbatos</h3>
                <p class="card-text">Iron-Blooded Orphans - Gundam Barbatos MG.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="card">
            <img src="ai.jpg" alt="Barang 7">
            <div class="card-body">
                <h3 class="card-title">Strike Gundam</h3>
                <p class="card-text">Gundam SEED - MG Strike Gundam + Launcher/Sword pack.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
        <!-- Card 8 -->
        <div class="card">
            <img src="ris.jpg" alt="Barang 8">
            <div class="card-body">
                <h3 class="card-title">SD Gundam RISING FREEDOM</h3>
                <p class="card-text">Super Deformed Rising Freedom Gundam Model Kit.</p>
                <a href="list.php" class="btn">Lihat Stok</a>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2024 Ridhokecot Store | 
        <a href="https://www.instagram.com/r.ridhokecot/">INSTAGRAM</a> | 
        <a href="https://www.tiktok.com/@ridhokecot">TIKTOK</a>
    </footer>

    <script>
        const slides = document.querySelector('.slides');
        const slideElements = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let currentIndex = 0;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = slideElements.length - 1;
            } else if (index >= slideElements.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prevButton.addEventListener('click', () => showSlide(currentIndex - 1));
        nextButton.addEventListener('click', () => showSlide(currentIndex + 1));

        setInterval(() => showSlide(currentIndex + 1), 5000); // Ganti slide otomatis setiap 5 detik
    </script>
</body>
</html>
