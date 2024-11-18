<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard() {
        $title = "Admin Dashboard";
        return view('admin', compact('title'));
    }
    public function admin_create_buku_dashboard() {
        $title = "Admin Create Buku";
        return view('admin-create-buku', compact('title'));
    }
    public function admin_update_buku_dashboard() {
        $title = "Admin Update Buku";
        return view('admin-update-buku', compact('title'));
    }
    public function admin_penulis_dashboard() {
        $title = "Admin Penulis";
        return view('admin-penulis', compact('title'));
    }
    public function admin_penerbit_dashboard() {
        $title = "Admin Penerbit";
        return view('admin-penerbit', compact('title'));
    }
    public function admin_peminjaman_dashboard() {
        $title = "Admin Peminjaman";
        return view('admin-peminjaman', compact('title'));
    }
    public function admin_kategori_dashboard() {
        $title = "Admin Kategori";
        return view('admin-kategori', compact('title'));
    }
}
