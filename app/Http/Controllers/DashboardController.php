<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use App\Models\Jabatan;
use App\Models\Prodi;


class DashboardController extends Controller
{
    function dataDosen() {
        $profils = Profil::whereIn('jabatan_id', [2, 3, 4])->with('jabatan', 'prodi')->get();

        return view('dashboard')->with('profils', $profils );
    }
}
