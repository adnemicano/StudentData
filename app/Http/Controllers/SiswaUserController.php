<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaUserController extends Controller
{
    public function index()
    {

        $profile = DB::table('profile')->get();
        return view('siswauser.index', compact('profile'));
    }

    public function kelas()
    {

        // $profile = DB::table('profile')->get();
        return view('siswauser.kelas');
    }

    public function showsiswa()
    {
        $profile = DB::table('profile')->get();
        return view('siswa.tambahsiswa', compact('profile'));
    }

}
