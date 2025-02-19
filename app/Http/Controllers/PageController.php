<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }
    
    public function about()
    {
        $nama = "Alvi Choirinnikmah";
        $nim = "2341760191"; 
        return "Nama: $nama <br> NIM: $nim";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id";
    }
}

