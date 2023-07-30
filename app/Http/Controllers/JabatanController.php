<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Profil;
use App\Models\Prodi;
use App\Models\User;

class JabatanController extends Controller
{
    function namaJabatan() {
        $namaJabatan = Jabatan::all();
        return view('register', compact('namaJabatan'));
    }

    function namaProdi() {
        $namaProdi = Prodi::all();
        return view('jabatan', compact('namaProdi'));
    }

    function dataJabatanDosen() {
        $jabatanDosen = Profil::with('jabatan', 'prodi')->get();
        $jabatanOptions = Jabatan::all(); // Mengambil semua data jabatan

        return view('jabatan')->with('jabatanDosen', $jabatanDosen)->with('jabatanOptions', $jabatanOptions);
    }

    public function updateJabatan(Request $request)
    {
        $jabatanId = $request->input('jabatanId');

        // Lakukan proses update jabatan di database berdasarkan $jabatanId
        // Misalnya, Anda dapat menggunakan query berikut untuk update data
        DB::table('profils')
            ->where('jabatan_id', $jabatanId)
            ->update(['jabatan_id' => $request->input('jabatan')]);

        // Contoh: kirim respon berhasil ke client
        return response()->json(['message' => 'Jabatan berhasil diubah']);
    }
}
