<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .register-container {
            margin-top: 50px;
        }
        .register-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        .social-login a {
            width: 48%;
        }
        .social-login .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .social-login .btn i {
            margin-right: 10px;
        }
        .img-fluid {
            border-radius: 10px;
        }
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .input-group {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container register-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-4">
                <img src="images/login.png" class="img-fluid" alt="Registration Image">
            </div>
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Daftar di <span style="color: #32CD32;">LEAD</span></h1>
                <div class="register-form">
                    <form action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </form>

                    <p class="mt-4 text-center">Atau daftar dengan:</p>
                    <div class="social-login">
                        <a href="<?php echo e(url('auth/google')); ?>" class="btn btn-outline-danger">
                            <i class="fab fa-google"></i> Google
                        </a>
                        <a href="<?php echo e(url('auth/facebook')); ?>" class="btn btn-outline-primary">
                            <i class="fab fa-facebook"></i> Facebook
                        </a>
                        <a href="<?php echo e(url('auth/twitter')); ?>" class="btn btn-outline-info">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </div>

                    <p class="mt-3 text-center">Sudah punya akun? <a href="<?php echo e(route('login')); ?>">Login Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel hackthon\desaluwimalang\resources\views/auth/register.blade.php ENDPATH**/ ?>