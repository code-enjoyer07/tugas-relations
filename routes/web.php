<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/* |--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::get("/register", [AuthController::class, 'register']);

Route::prefix("/dashboard")->group(function () {
    Route::get("/siswa", [SiswaController::class, 'siswa_dashboard'])->name('siswa_dashboard');
    Route::get('/siswa/peminjaman', [SiswaController::class, 'siswa_dashboard_create_peminjaman'])->name('siswa_dashboard_create_peminjaman');
    Route::get("/siswa/buku", [SiswaController::class, 'siswa_dashboard_buku'])->name('siswa_dashboard_buku');

    Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/admin/create-book', [AdminController::class, 'admin_create_buku_dashboard'])->name('admin_create_buku_dashboard');
    Route::get('/admin/update-book', [AdminController::class, 'admin_update_buku_dashboard'])->name('admin_update_buku_dashboard');
    Route::get('/admin/penulis', [AdminController::class, 'admin_penulis_dashboard'])->name('admin_penulis_dashboard');
    Route::get('/admin/penerbit', [AdminController::class, 'admin_penerbit_dashboard'])->name('admin_penerbit_dashboard');
    Route::get('/admin/peminjaman', [AdminController::class, 'admin_peminjaman_dashboard'])->name('admin_peminjaman_dashboard');
    Route::get('/admin/kategori', [AdminController::class, 'admin_kategori_dashboard'])->name('admin_kategori_dashboard');
    Route::get('/settings', [SettingsController::class, 'pengaturan'])->name('pengaturan');
});
