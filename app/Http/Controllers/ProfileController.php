<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Profil;

class ProfileController extends Controller
{
    function editBiodata() {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                return view('/editbiodata', ['profil' => $profil]);
            } else {
                return redirect()->back()->with('error', 'Profil tidak ditemukan');
            }
        }
    }

    function updateBiodata(Request $request) {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                $profil->nama = $request->input('nama');
                $profil->tempat_lahir = $request->input('tempat_lahir');
                $profil->tanggal_lahir = $request->input('tanggal_lahir');
                $profil->kelamin = $request->input('kelamin');
                $profil->alamat = $request->input('alamat');
                $profil->alamat_kabkot = $request->input('alamat_kabkot');
                $profil->alamat_prov = $request->input('alamat_prov');
                $profil->no_hp = $request->input('no_hp');
                $profil->email = $request->input('email');
                $profil->no_identitas = $request->input('no_identitas');
                $profil->prodi_id = $request->input('prodi');
                $profil->jabatan_id = $request->input('jabatan');

                $profil->save();

                return redirect()->route('edit.biodata')->with('success', 'Biodata berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data tidak tersimpan.');
            }
        }
    }
}
