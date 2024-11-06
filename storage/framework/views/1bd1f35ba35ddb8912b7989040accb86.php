<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Agro-Inovasi Leuwimalang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"> 
</head>
<body>
    <style>
    .hero-section {
    background-image: url('<?php echo e(asset('images/bg.png')); ?>'); 
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
            <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/about')); ?>">About</a></li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Interactive Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Marketplace</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
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
        <h1 class="display-4">Selamat datang di <h1> 
            <span style="color: #32CD32;">Hub Agro-Inovasi</span><h1> Leuwimalang</h1>
        <p>Pemberdayaan Petani Lokal melalui Inovasi dan Teknologi</p>
        <p style="text-align: justify; line-height: 1.3; max-width: 520px; "> 
            LEAD, platform yang mengintegrasikan teknologi dan kewirausahaan untuk memberdayakan 
            petani lokal dan mengembangkan produk inovatif di desa wisata Leuwimalang. 
            Kami percaya bahwa dengan inovasi dan kolaborasi, kita bisa membawa Leuwimalang 
            menjadi destinasi agrotourism terdepan yang berkelanjutan dan bermanfaat bagi masyarakat.</p>
        <a href="#" class="btn btn-custom btn-lg">Login</a>
    </div>
</section>

<!-- Mengapa Leuwimalang Section -->
<section class="why-leuwimalang-section py-5">
    <div class="container">
        <h2 class="text-center mb-4"><span style="color: #32CD32;">Why</span> LEAD?</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="<?php echo e(asset('images/hero.png')); ?>" alt="Leuwimalang lanskap" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <p style="text-align: justify;">Leuwimalang adalah desa yang kaya akan potensi pertanian dan warisan budaya. Namun, untuk berkembang sebagai destinasi agrotourism yang lebih besar, kami memadukan kekuatan kearifan lokal dengan teknologi modern. Berikut adalah fokus utama kami:</p>
                
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/icon1.png')); ?>" alt="Leaf Icon" class="me-2" style="width: 50px; height: 50px;">
                    <div>
                        <h5 class="mb-1">Innovative Agrotourism Products</h5>
                        <p style="text-align: justify;">Rasakan perpaduan tradisi dan teknologi dalam produk kerajinan lokal kami.</p>
                    </div>
                </div>
                
                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/icon2.png')); ?>" alt="Tractor Icon" class="me-2" style="width: 50px; height: 50px;">
                    <div>
                        <h5 class="mb-1">Empowering Farmers</h5>
                        <p style="text-align: justify;">Kami menyediakan alat dan pelatihan bagi petani untuk meningkatkan keterampilan kewirausahaan mereka dan menjangkau pasar baru.</p>
                    </div>
                </div>

                <div class="feature-card mb-3 d-flex align-items-start">
                    <img src="<?php echo e(asset('images/icon3.png')); ?>" alt="Seedling Icon" class="me-2" style="width: 50px; height: 50px;">
                    <div>
                        <h5 class="mb-1">Sustainable Growth</h5>
                        <p style="text-align: justify;">Pendekatan kami berfokus pada dampak jangka panjang, memastikan bahwa masyarakat dan lingkungan hidup berkembang.</p>
                    </div>
                </div>
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

<!-- Bagian Penawaran -->
<section class="offer-section text-center">
    <div class="container">
        <h2><span style="color: #32CD32;">What</span> We Offer</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex flex-column">
                        <h5>Interactive Map 
                            <img src="<?php echo e(asset('images/ikon1.png')); ?>" alt="Peta Icon" style="width: 28px; height: 28px; vertical-align: middle;">
                        </h5>
                        <p>Temukan kekayaan potensi Leuwimalang melalui peta interaktif kami, yang menampilkan area inovasi dan pertumbuhan.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-custom btn-block">Cek</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex flex-column">
                        <h5>Innovative Products 
                            <img src="<?php echo e(asset('images/ikon2.png')); ?>" alt="Produk Icon" style="width: 28px; height: 28px; vertical-align: middle;">
                        </h5>
                        <p>Jelajahi berbagai produk lokal yang dibuat menggunakan teknik pertanian berkelanjutan dan proses inovatif.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-custom btn-block">Cek</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex flex-column">
                        <h5>Entrepreneurship 
                            <img src="<?php echo e(asset('images/ikon3.png')); ?>" alt="Kewirausahaan Icon" style="width: 29px; height: 28px; vertical-align: middle;">
                        </h5>
                        <p>Pelajari upaya kami membantu petani menjadi wirausaha digital melalui lokakarya dan akses terhadap pendanaan.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-custom btn-block">Cek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="join-us-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><span style="color: #32CD32;">Join</span> Us on This Journey</h2>
                <h6>Support Local Innovation! Discover, shop, and support the future of Leuwimalang</h6>
                <p style="text-align: justify;">Bergabunglah dengan LEAD dan bantu kami menciptakan perubahan yang berdampak besar di Leuwimalang. Dukung petani lokal, temukan produk inovatif, dan berikan kontribusi nyata dalam pengembangan agrotourism berkelanjutan di desa ini.</p>
                <a href="#" class="btn btn-success">Join</a>
            </div>
            <div class="col-md-6 text-end">
                <img src="<?php echo e(asset('images/img join.png')); ?>" alt="Image" class="img-fluid rounded" style="max-width: 80%;">
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hackthon1\desaluwimalang\resources\views/welcome.blade.php ENDPATH**/ ?>