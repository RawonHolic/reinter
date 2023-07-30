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

                $profil->save();

                Session::put('nama', $request->input('nama'));
                Session::put('tempat_lahir', $request->input('tempat_lahir'));
                Session::put('tanggal_lahir', $request->input('tanggal_lahir'));
                Session::put('kelamin', $request->input('kelamin'));
                Session::put('alamat', $request->input('alamat'));
                Session::put('alamat_kabkot', $request->input('alamat_kabkot'));
                Session::put('alamat_prov', $request->input('alamat_prov'));
                Session::put('no_hp', $request->input('no_hp'));
                Session::put('email', $request->input('email'));
                Session::put('no_identitas', $request->input('no_identitas'));

                return redirect()->route('edit.biodata')->with('success', 'Biodata berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data tidak tersimpan.');
            }
        }
    }

    function editRiwayatPendidikan() {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                return view('/editpendidikan', ['profil' => $profil]);
            } else {
                return redirect()->back()->with('error', 'Profil tidak ditemukan');
            }
        }
    }

    function updateRiwayatPendidikan(Request $request) {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                $profil->sma = $request->input('sma');
                $profil->sarjana = $request->input('sarjana');
                $profil->s_jurusan = $request->input('s_jurusan');
                $profil->magister = $request->input('magister');
                $profil->m_jurusan = $request->input('m_jurusan');
                $profil->doktoral = $request->input('doktoral');
                $profil->d_jurusan = $request->input('d_jurusan');
                $profil->keahlian = $request->input('keahlian');
                $profil->k_jurusan = $request->input('k_jurusan');

                $profil->save();

                Session::put('sma', $request->input('sma'));
                Session::put('sarjana', $request->input('sarjana'));
                Session::put('s_jurusan', $request->input('s_jurusan'));
                Session::put('magister', $request->input('magister'));
                Session::put('m_jurusan', $request->input('m_jurusan'));
                Session::put('doktoral', $request->input('doktoral'));
                Session::put('d_jurusan', $request->input('d_jurusan'));
                Session::put('keahlian', $request->input('keahlian'));
                Session::put('k_jurusan', $request->input('k_jurusan'));

                return redirect()->route('edit.pendidikan')->with('success', 'Riwayat pendidikan berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data tidak tersimpan.');
            }
        }
    }

    function editPengalaman() {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                return view('/editpengalaman', ['profil' => $profil]);
            } else {
                return redirect()->back()->with('error', 'Profil tidak ditemukan');
            }
        }
    }

    function updatePengalaman(Request $request) {
        if (Session::has('id')) {
            $user = Session::get('id');

            $profil = Profil::where('users_id', $user)->first();

            if ($profil) {
                $profil->organisasi = $request->input('organisasi');
                $profil->o_jabatan = $request->input('o_jabatan');
                $profil->o_deskripsi = $request->input('o_deskripsi');
                $profil->instansi = $request->input('instansi');
                $profil->i_jabatan = $request->input('i_jabatan');
                $profil->i_deskripsi = $request->input('i_deskripsi');
                $profil->perusahaan = $request->input('perusahaan');
                $profil->p_jabatan = $request->input('p_jabatan');
                $profil->p_deskripsi = $request->input('p_deskripsi');

                $profil->save();

                Session::put('organisasi', $request->input('organisasi'));
                Session::put('o_jabatan', $request->input('o_jabatan'));
                Session::put('o_deskripsi', $request->input('o_deskripsi'));
                Session::put('instansi', $request->input('instansi'));
                Session::put('i_jabatan', $request->input('i_jabatan'));
                Session::put('i_deskripsi', $request->input('i_deskripsi'));
                Session::put('perusahaan', $request->input('perusahaan'));
                Session::put('p_jabatan', $request->input('p_jabatan'));
                Session::put('p_deskripsi', $request->input('p_deskripsi'));

                return redirect()->route('edit.pengalaman')->with('success', 'Pengalaman berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Data tidak tersimpan.');
            }
        }
    }
}
