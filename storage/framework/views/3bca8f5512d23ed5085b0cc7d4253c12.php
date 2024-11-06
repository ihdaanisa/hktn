<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Agro-Inovasi Leuwimalang - Maps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/news.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
    <style>
        .hero-section {
            background-image: url('<?php echo e(asset('images/bg-maps.png')); ?>'); 
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
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/interactive-map')); ?>">Interactive Map</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/event')); ?>">Event</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/marketplace')); ?>">Marketplace</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/news')); ?>">News</a></li>
                <li class="nav-item"><a class="btn btn-custom" href="<?php echo e(route('login')); ?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <h1 class="display-4">Interactive Maps</h1> 
        <p>Explore the Rich Potential of Agrotourism</p>
    </div>
</section>
<section class="why-leuwimalang-section py-5">
    <div class="container">
        <h2 class="text-center mb-4"><span style="color: #32CD32;">Leuwimalang</span> Maps</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15851.417791059517!2d106.91185467711945!3d-6.664953030433904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b7d2cc8f1c8b%3A0xb67e1047e0ad0363!2sLeuwimalang%2C%20Kec.%20Cisarua%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1728531831666!5m2!1sid!2sid" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </section>

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
    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel hackthon\desaluwimalang\resources\views/maps.blade.php ENDPATH**/ ?>