<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Agro-Inovasi Leuwimalang - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>"> 
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
</head>
<body>
    <style>
    .hero-section {
    background-image: url('<?php echo e(asset('images/bg-about.png')); ?>'); 
}
        </style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item text-white"><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="nav-item text-white"><a class="nav-link active" href="<?php echo e(url('/about')); ?>">About</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/interactive-map')); ?>">Interactive Map</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/event')); ?>">Event</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/marketplace')); ?>">Marketplace</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/news')); ?>">News</a></li>
                <li class="nav-item">
                    <a class="btn btn-custom" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <h1 class="display-4">About & Innovation<h1> 
    </div>
</section>

<!-- About-->
<section class="why-leuwimalang-section py-5">
    <div class="container">
        <h2 class="text-center mb-4"><span style="color: #32CD32;">About</span> LEAD?</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="<?php echo e(asset('images/hero-about.png')); ?>" alt="Leuwimalang lanskap" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Leading Innovation, Empowering Farmers, and Developing Sustainable Agrotourism</h3>
                <p style="text-align: justify;">LEAD adalah inisiatif yang berfokus pada pemberdayaan petani di Leuwimalang melalui pengembangan produk inovatif dan kewirausahaan berbasis teknologi. Kami menggabungkan tradisi lokal dengan teknologi modern untuk menciptakan solusi berkelanjutan yang memperkuat daya tarik agrotourism sekaligus memberikan manfaat ekonomi bagi masyarakat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gabung Section -->
<section class="join-section text-center">
    <div class="container">
    <h2><span style="color: #32CD32;">Our</span> Mission</h2>
        <p>Misi kami adalah untuk membangun ekosistem agrotourism yang berkelanjutan di Leuwimalang melalui inovasi teknologi dan pengembangan kewirausahaan, memberdayakan petani lokal agar mampu menciptakan produk dan layanan inovatif yang dapat bersaing di pasar yang lebih luas</p>
        <a href="#" class="btn btn-custom btn-lg">Bergabunglah</a>
    </div>
</section>

<!-- Innovation -->
<section class="why-leuwimalang-section py-5">
    <div class="container">
        <h2 class="text-center mb-4"><span style="color: #32CD32;">Innovation</span> at LEAD</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="<?php echo e(asset('images/product-about.png')); ?>" alt="Leuwimalang lanskap" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Product Innovation</h3>
                <p style="text-align: justify;">Kami membantu petani di Leuwimalang untuk mengembangkan produk berbasis pertanian dan kerajinan lokal yang inovatif.</p>
                
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">Produk Makanan Olahan</h5>
                        <p style="text-align: justify;">Produk makanan dari bahan baku lokal yang diolah dengan teknologi modern untuk meningkatkan daya tahan dan nilai jual.</p>
                    </div>
                </div>     
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">Kerajinan Berbasis Budaya</h5>
                        <p style="text-align: justify;">Mengembangkan produk kerajinan dengan sentuhan inovatif yang tetap mempertahankan warisan budaya desa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-leuwimalang-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3>Technology Integration</h3>
                <p style="text-align: justify;">Kami mengintegrasikan teknologi untuk meningkatkan produktivitas dan efisiensi petani di Leuwimalang.</p>
                
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">Digital Tools for Farmers</h5>
                        <p style="text-align: justify;">Penggunaan aplikasi dan teknologi untuk monitoring hasil pertanian, pengelolaan lahan, dan akses pasar.</p>
                    </div>
                </div>     
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">E-commerce Platforms</h5>
                        <p style="text-align: justify;">Solusi penjualan online yang memudahkan petani memasarkan produk mereka ke pasar yang lebih luas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <img src="<?php echo e(asset('images/teknologi-about.png')); ?>" alt="Image" class="img-fluid rounded" >
            </div>
    </div>
</section>

<!-- Mengapa Leuwimalang Section -->
<section class="why-leuwimalang-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="<?php echo e(asset('images/sayur-about.png')); ?>" alt="Leuwimalang lanskap" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Sustainable Growth</h3>
                <p style="text-align: justify;">Kami memprioritaskan praktik berkelanjutan dalam setiap inovasi, sehingga desa Leuwimalang dapat berkembang tanpa merusak sumber daya alamnya.</p>
                
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">Pertanian Ramah Lingkungan</h5>
                        <p style="text-align: justify;">Mendorong penggunaan metode pertanian organik yang lebih sehat bagi alam dan konsumen.</p>
                    </div>
                </div>     
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/elips.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 35px; height: 35px;">
                    <div>
                        <h5 class="mb-1">Manajemen Limbah Inovatif</h5>
                        <p style="text-align: justify;">Mengubah limbah pertanian menjadi produk bernilai tambah seperti pupuk organik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer bg-green text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="logo.png" alt="Logo" style="height: 40px;">
                </div>
                <div class="col-md-3">
                    <h5>Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Syarat dan Ketentuan</a></li>
                        <li><a href="#" class="text-white">FAQ</a></li>
                        <li><a href="#" class="text-white">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Explore</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Marketplace</a></li>
                        <li><a href="#" class="text-white">Event</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Kontak Kami</h5>
                    <p>Jalan Lewimalang, Jawa Timur</p>
                    <p>Email: leadwebsite@gmail.com</p>
                    <p>Phone: 085111223333</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 LEAD. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 <?php /**PATH C:\xampp\htdocs\laravel hackthon\desaluwimalang\resources\views/about.blade.php ENDPATH**/ ?>