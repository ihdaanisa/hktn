<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Agro-Inovasi Leuwimalang - Maps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/news.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/product.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
    <style>
        .hero-section {
            background-image: url('<?php echo e(asset('images/market-bg.png')); ?>'); 
        }
    </style>
</head>
<body>

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
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/about')); ?>">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/interactive-map')); ?>">Interactive Map</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/event')); ?>">Event</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/marketplace')); ?>">Marketplace</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/news')); ?>">News</a></li>
                <li class="nav-item"><a class="btn btn-custom" href="<?php echo e(route('login')); ?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
    <h1 class="display-4">LEAD Marketplace</h1>
    <p>Shop Innovative, Local Products from Lewimalang</p>
    </div>
</section>
<section class="why-leuwimalang-section py-5">
<div class="container mt-4">
        <h2 class="mb-4"> Our <span style="color: #32CD32;">Products</span></h2>
    </div>
    </section>
<section class="products-section py-5">
    <div class="container">
  
        <div class="row g-4">
            <!-- Product Cards -->
            <div class="col-md-4 col-lg-3">
                <a href="<?php echo e(url('/product/1')); ?>" class="text-decoration-none">
                    <div class="card product-card">
                        <img src="images/product1.png" class="card-img-top" alt="Lampu Antik Kayu">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lampu Antik Kayu</h5>
                            <p class="card-text">Rp. 250.000</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Product Cards (repeat for other products) -->
            <div class="col-md-4 col-lg-3">
                <a href="<?php echo e(url('/product/2')); ?>" class="text-decoration-none">
                    <div class="card product-card">
                        <img src="images/product2.png" class="card-img-top" alt="Lukisan Minyak Kanvas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lukisan Minyak Kanvas</h5>
                            <p class="card-text">Rp. 350.000</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-3">
                <a href="<?php echo e(url('/product/1')); ?>" class="text-decoration-none">
                    <div class="card product-card">
                        <img src="images/product3.png" class="card-img-top" alt="Lampu Antik Kayu">
                        <div class="card-body text-center">
                            <h5 class="card-title">Talas Abi Ungu</h5>
                            <p class="card-text">Rp. 20.000</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-3">
                <a href="<?php echo e(url('/product/1')); ?>" class="text-decoration-none">
                    <div class="card product-card">
                        <img src="images/product4.png" class="card-img-top" alt="Lampu Antik Kayu">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jus Organik</h5>
                            <p class="card-text">Rp. 10.000</p>
                            <button class="btn btn-success">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


    <!-- Special Offers -->
    <section class="special-offers py-5 bg-light">
        <div class="container">
            <div class="row">
            <img src="images/p.png"  alt="Lukisan Minyak Kanvas">
                
        </div>
    </section>

  

    <!-- Footer -->
    <footer class="footer bg-green text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo.png" alt="Logo" style="height: 40px;">
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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel hackthon\desaluwimalang\resources\views/marketplace.blade.php ENDPATH**/ ?>