<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerusahaanController;

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'dashboard'])->name('user.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:perusahaan'])->group(function () {
    Route::get('/dashboard/perusahaan', [PerusahaanController::class, 'dashboard'])->name('perusahaan.dashboard');
});

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');  // Show login form
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');  // Handle login submission
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');  // Handle logout

// Registration Route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/report/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('/report/store', [ReportController::class, 'store'])->name('reports.store');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/tentang-kami', [UserController::class, 'tentangKami'])->name('tentangKami');
Route::get('/laporan', [UserController::class, 'laporan'])->name('laporan');
Route::get('/data-laporan', [UserController::class, 'dataLaporan'])->name('dataLaporan');
Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');
});


