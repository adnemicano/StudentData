@extends('layouts.admin')

@section('judul')

@section('content')
<div class="p-3">
    <h2>Edit Data Profile Siswa {{$profile->id}} </h2>
        <form action="/siswa/{{$profile->id}}" method="POST">
            @csrf
           @method('PUT')
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="{{$profile->nama_lengkap}}" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                @error('nama_lengkap')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nis_siswa">NIS Siswa</label>
                <input type="number" class="form-control" name="nis_siswa" value="{{$profile->nis_siswa}}" id="nis_siswa" placeholder="Masukkan NIS Siswa">
                @error('nis_siswa')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur_siswa">Umur Siswa</label>
                <input type="number" class="form-control" name="umur_siswa" value="{{$profile->umur_siswa}}" id="umur_siswa" placeholder="Masukkan umur Siswa">
                @error('umur_siswa')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="{{$profile->jenis_kelamin}}" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                @error('jenis_kelamin')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/siswa" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>


@endsection
