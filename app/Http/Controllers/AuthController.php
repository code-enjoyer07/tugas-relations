<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        $title = "Login perpustakaan";
        return view('auth.login', compact('title'));
    }
    public function register() {
        $title = "Register perpustakaan";
        return view("auth.register", compact("title"));
    }
}
