<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        //mengambil data dari table profile
        $profile = DB::table('profile')->get();

        $title = 'Peringatan !';
        $text = "Apakah anda yakin ingin menghapis?";
        $icon = "Question";
        confirmDelete($title, $text);

        //mengirim data dari tabel profile
        return view('siswa.indexsiswa', compact('profile'));
    }

    public function tambahsiswa()
    {
        return view('siswa.tambahsiswa');
    }

    public function siswa(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|',
            'nis_siswa' => 'required|',
            'umur_siswa' => 'required|',
            'jenis_kelamin' => 'required|',
        ]);

        DB::table('profile')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'nis_siswa' => $request->nis_siswa,
            'umur_siswa' => $request->umur_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,

        ]);

        Alert::success('Success Title', 'Success Message');
        return redirect('/siswa');
    }

    public function showsiswa($id)
    {
        $profile = DB::table('profile')->find($id);
        return view('siswa.detailsiswa', compact('profile'));
    }

    public function editsiswa($id)
    {
        $profile = DB::table('profile')->find($id);
        return view('siswa.editsiswa', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nis_siswa' => 'required|',
            'umur_siswa' => 'required|',
            'jenis_kelamin' => 'required|',
        ]);

        $request = DB::table('profile')
            ->where('id', $id)
            ->update([ //kolom yang mau diambil
                'nama_lengkap' => $request->nama_lengkap,
                'nis_siswa' => $request->nis_siswa,
                'umur_siswa' => $request->umur_siswa,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);

        Alert::success('Succes', 'Data berhasil diupdate');
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $profile = DB::table('profile')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('/siswa');
    }
}
