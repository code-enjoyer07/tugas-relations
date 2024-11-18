<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get("/login", [AuthController::class, 'login']);
Route::get("/register", [AuthController::class, 'register']);

Route::prefix("/dashboard")->group(function () {
    Route::get("/siswa", [SiswaController::class, 'siswa_dashboard']);
    Route::get('/siswa/peminjaman', [SiswaController::class, 'siswa_dashboard_create_peminjaman']);
    Route::get("/siswa/buku", [SiswaController::class, 'siswa_dashboard_buku']);

    Route::get('/admin', [AdminController::class, 'admin_dashboard']);
    Route::get('/admin/create-book', [AdminController::class, 'admin_create_buku_dashboard']);
    Route::get('/admin/update-book', [AdminController::class, 'admin_update_buku_dashboard']);
    Route::get('/admin/penulis', [AdminController::class, 'admin_penulis_dashboard']);
    Route::get('/admin/penerbit', [AdminController::class, 'admin_penerbit_dashboard']);
    Route::get('/admin/peminjaman', [AdminController::class, 'admin_peminjaman_dashboard']);
    Route::get('/admin/kategori', [AdminController::class, 'admin_kategori_dashboard']);
});
