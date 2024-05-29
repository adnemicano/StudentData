@extends('layouts.admin')

@section('judul')
Detail Profil Siswa
@endsection

@section('content')

<div class="p-3">
    <div class="card" style="width: 24rem;">
    <div class="card-body" >
        <h5 class="card_title">Detail Profil Siswa ke {{ $profile->id }}</h5>
        <h4>{{ $profile->nama_lengkap }}</h4>
        <h4>{{ $profile->nis_siswa }}</h4>
        <h4>{{ $profile->umur_siswa }}</h4>
        <h4>{{ $profile->jenis_kelamin }}</h4>
    </div>
    </div>

<a href="{{ route('admin.siswa') }}" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection
