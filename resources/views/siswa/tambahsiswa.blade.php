@extends('layouts.admin')

@section('judul', 'Tambah Profil Siswa')

@section ('content')

<form action="{{ route('admin.siswaadd') }}" method="POST">

    @csrf
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text"name='nama_lengkap' class="form-control" placeholder="Masukan Nama Lengkap">
            @error('nama_lengkap')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group p-3">
        <label>NIS Siswa</label>
        <input type="number"name='nis_siswa' class="form-control" placeholder="Masukan NIS Siswa">
            @error('nis_siswa')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group p-3">
        <label>Umur</label>
        <input type="number"name='umur_siswa' class="form-control" placeholder="Masukan Umur Siswa">
            @error('umur_siswa')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group p-3">
        <label>Jenis Kelamin</label>
        <input type="text"name='jenis_kelamin' class="form-control" placeholder="Masukan Jenis Kelamin">
            @error('jenis_kelamin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection




