<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Agro-Inovasi Leuwimalang - Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
    <style>
        .hero-section {
            background-image: url('<?php echo e(asset('images/bg-event.png')); ?>'); 
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .news h2 {
            color: black;
            font-weight: bold;
        }
        .news-card {
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .news-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .news-card img {
            border-radius: 10px 10px 0 0;
        }
        .news-card a {
            text-decoration: none;
            color: inherit;
        }
        .news-nav {
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
        }
        .news-nav a {
            margin: 0 15px;
            font-weight: bold;
            color: #000;
            cursor: pointer;
        }
        .news-nav a.active {
            color: #007bff;
            border-bottom: 2px solid #007bff;
        }
        .news-section {
            display: none;
        }
        .news-section.active {
            display: block;
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
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/event')); ?>">Event</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/marketplace')); ?>">Marketplace</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo e(url('/news')); ?>">News</a></li>
                <li class="nav-item"><a class="btn btn-custom" href="<?php echo e(route('login')); ?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
</section>

<!-- Secondary Navbar -->
<section class="news">
<div class="container mt-4">
        <h2 class="mb-4"> <span style="color: #32CD32;">Event </span> Mendatang </h2>
    </div>
    </section>

<!-- News Section -->
<section class="news">
<div class="container mt-4">
    <!-- Trending Section -->
    <div class="news-section active">
        <div class="row">
    <div class="col-md-6"> <!-- Ubah ke col-md-6 untuk membagi layar jadi 2 kolom besar -->
        <div class="card news-card"> 
            <a href="<?php echo e(url('/event-detail/1')); ?>">
                <img src="images/event1.png" class="card-img-top" alt="News Image 1">
                <div class="card-body">
                    <h5 class="card-title">Pemanfaatan Lead Website dalam Penjualan</h5>
                    <p>13 Oktober 2024</p>
                    <p>Desa Leuwimalang</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6"> <!-- Ubah ke col-md-6 juga untuk card kedua -->
        <div class="card news-card"> 
            <a href="<?php echo e(url('/news-detail/2')); ?>">
                <img src="images/event2.png" class="card-img-top" alt="News Image 2">
                <div class="card-body">
                <h5 class="card-title">Penggunaan Teknologi Digital dalam Penjualan</h5>
                    <p>10 Oktober 2024</p>
                    <p>Desa Leuwimalang</p>
                </div>
            </a>
        </div>
    </div>
</div>
        </div>
    </div>
    </section>
    <section class="news">
<div class="container mt-4">
        <h2 class="mb-4"> <span style="color: #32CD32;">Event </span> Terdekat </h2>
    </div>
    </section>

<!-- News Section -->
<section class="news">
<div class="container mt-4">
    <!-- Trending Section -->
    <div class="news-section active">
        <div class="row">
    <div class="col-md-6"> <!-- Ubah ke col-md-6 untuk membagi layar jadi 2 kolom besar -->
        <div class="card news-card"> 
            <a href="<?php echo e(url('/event-detail/1')); ?>">
                <img src="images/event3.png" class="card-img-top" alt="News Image 1">
                <div class="card-body">
                    <h5 class="card-title">Pemanfaatan Lead Website dalam Penjualan</h5>
                    <p>20 Oktober 2024</p>
                    <p>Desa Leuwimalang</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6"> <!-- Ubah ke col-md-6 juga untuk card kedua -->
        <div class="card news-card"> 
            <a href="<?php echo e(url('/news-detail/2')); ?>">
                <img src="images/event4.png" class="card-img-top" alt="News Image 2">
                <div class="card-body">
                <h5 class="card-title">Penggunaan Teknologi Digital dalam Penjualan</h5>
                    <p>29 Oktober 2024</p>
                    <p>Desa Leuwimalang</p>
                </div>
            </a>
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
</html>
<?php /**PATH C:\xampp\htdocs\laravel hackthon\desaluwimalang\resources\views/event.blade.php ENDPATH**/ ?>