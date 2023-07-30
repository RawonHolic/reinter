<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    function namaProdi() {
        $namaProdi = Prodi::all();
        return view('register', compact('namaProdi'));
    }
}
