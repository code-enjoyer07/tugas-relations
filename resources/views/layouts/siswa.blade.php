@extends('layouts.head')

@section("title", "dashboard")

@section('content')
    <nav class="bg-gray-800 text-white flex items-center justify-between p-4">
        <a class="text-lg font-bold" href="#">Admin Dashboard</a>
        <button class="text-white md:hidden" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 h-screen w-64 px-4 py-6 fixed md:relative -translate-x-full md:translate-x-0 transition-transform duration-300">
            <nav class="flex flex-col space-y-2">
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    Dashboard
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-book mr-2"></i>
                    Buku
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-book mr-2"></i>
                    Kategori Buku
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-pencil mr-2"></i>
                    Penulis
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-house mr-2"></i>
                    Penerbit
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-hand mr-2"></i>
                    Peminjaman
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-gear mr-2"></i>
                    Pengaturan
                </a>
                <a class="flex items-center text-white py-2 px-3 rounded hover:bg-gray-700" href="#">
                    <i class="fas fa-right-from-bracket mr-2"></i>
                    Logout
                </a>
            </nav>
        </div>

        <div class="flex flex-col w-full h-screen p-5">
            <!-- Content Section -->
            @yield('content') 
            <footer class="py-4 bg-gray-200 mt-auto">
                <div class="text-center text-gray-600">
                    Copyright &copy; Web Perpustakaan 2023
                </div>
            </footer>
        </div>
    </div>
@endsection
