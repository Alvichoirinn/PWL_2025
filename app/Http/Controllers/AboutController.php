<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $nama = "Alvi Choirinnikmah";
        $nim = "2341760191"; 
        return "Nama: $nama <br> NIM: $nim";
    }
}

