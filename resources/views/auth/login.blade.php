@extends('layouts.head')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-scree">
        <section class="w-full max-w-sm p-6 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <img src="./images/smk6.ico" alt="Logo" class="mx-auto mb-2" />
                <h3 class="text-lg font-semibold">Login - Web Perpustakaan</h3>
            </div>
            <div>
                <form action="">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username *</label>
                        <input type="text" name="username" id="username"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan username Anda" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
                        <input type="password" name="password" id="password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan password Anda" />
                    </div>
                    <div class="mb-4">
                        <button class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700"
                            type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <a href="#">
                    <p class="text-blue-600 hover:underline">Tidak punya akun? Silahkan mendaftar</p>
                </a>
            </div>
        </section>
    </div>
@endsection
