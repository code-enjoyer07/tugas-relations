<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa_dashboard() {
        $title = "Siswa Dashboard";
        return view("siswa", compact("title"));
    }
}
