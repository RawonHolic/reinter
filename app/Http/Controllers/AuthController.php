<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function doRegister(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        
        $profil = new Profil;
        $profil->users_id = $user->id;
        $profil->nama = $request->nama;
        $profil->tempat_lahir = $request->tempat_lahir;
        $profil->tanggal_lahir = $request->tanggal_lahir;
        $profil->kelamin = $request->kelamin;
        $profil->alamat = $request->alamat;
        $profil->alamat_kabkot = $request->alamat_kabkot;
        $profil->alamat_prov = $request->alamat_prov;
        $profil->no_hp = $request->no_hp;
        $profil->email = $request->email;
        $profil->no_identitas = $request->no_identitas;
        $profil->prodi_id = $request->prodi;
        $profil->jabatan_id = $request->jabatan;
        $profil->save();

        Session::flash('message', 'Proses Registrasi Berhasil');
        return redirect('/login');
    }

    function doLogin(Request $request){
        $user = User::where('username', '=', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $profil = Profil::where('users_id', $user->id)->first();

            switch ($profil->jabatan_id) {
                case 1:
                    $jabatan = 'Superadmin';
                    break;
                case 2:
                    $jabatan = 'Dekan';
                    break;
                case 3:
                    $jabatan = 'Kaprodi';
                    break;
                case 4:
                    $jabatan = 'Dosen';
                    break;
                default:
                    $jabatan = 'User';
                    break;
            }

            switch ($profil->prodi_id) {
                case 1:
                    $jabatan = 'Pendidikan Jasmani';
                    break;
                case 2:
                    $jabatan = 'PGSD';
                    break;
                default:
                    $jabatan = 'Departement';
                    break;
            }

            Session::put('id', $user->id);
            Session::put('nama', $profil->nama);
            Session::put('tempat_lahir', $profil->tempat_lahir);
            Session::put('tanggal_lahir', $profil->tanggal_lahir);
            Session::put('kelamin', $profil->kelamin);
            Session::put('alamat', $profil->alamat);
            Session::put('alamat_kabkot', $profil->alamat_kabkot);
            Session::put('alamat_prov', $profil->alamat_prov);
            Session::put('no_hp', $profil->no_hp);
            Session::put('email', $profil->email);
            Session::put('no_identitas', $profil->no_identitas);
            Session::put('prodi', $prodi);
            Session::put('jabatan', $jabatan);
            return redirect('/');
        }else{
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/login');
        }
    }

}
