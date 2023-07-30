<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function create()
    {
        $profils = Profil::all(); // Ambil semua data profil untuk diisi dropdown
        return view('tambahmatkul', compact('profils'));
    }

    // Menangani pengiriman formulir untuk menyimpan matkul baru
    public function store(Request $request)
    {
        // Validasi data dari formulir
        $request->validate([
            'nama_matkul' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'sks' => 'required|integer',
            'deskripsi' => 'nullable|string|max:500',
            'dosen_pengampu' => 'nullable|string|max:255',
            'profil_id' => 'required|exists:profils,id', // Asumsi nama tabel untuk profil adalah 'profils'
        ]);

        // Buat data matkul baru
        $matkul = new Matkul();
        $matkul->nama_matkul = $request->input('nama_matkul');
        $matkul->jenis = $request->input('jenis');
        $matkul->sks = $request->input('sks');
        $matkul->deskripsi = $request->input('deskripsi');
        $matkul->dosen_pengampu = $request->input('dosen_pengampu');
        $matkul->profil_id = $request->input('profil_id');
        $matkul->save();

        // Alihkan kembali ke formulir dengan pesan sukses
        return redirect('/tambahmatkul')->with('success', 'Matkul berhasil ditambahkan!');
    }
}
