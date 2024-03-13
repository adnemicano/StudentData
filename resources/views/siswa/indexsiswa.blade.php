@extends('layouts.admin')
@section('judul')
Data Siswa
@endsection

    {{-- Page Heading --}}

@section('tabel')

<div class="p-3">
    <a href="/tambahsiswa" class="btn btn-primary my-3">Tambah Data Siswa</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">NIS Siswa</th>
        <th scope="col">Umur</th>
        <th scope="col">Jenis Kelamin</th>
      </tr>
      </thead>
      <tbody>
        @forelse ($profile as  $key => $value)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $value->nama_lengkap }}</td>
            <td>{{ $value->nis_siswa }}</td>
            <td>{{ $value->umur_siswa }}</td>
            <td>{{ $value->jenis_kelamin }}</td>
            <td class="mr-3">
                <a href="/showsiswa/{{$value->id}}" class="btn btn-info">Show</a>
                <a href="/editsiswa/{{$value->id}}" class="btn btn-primary">Edit</a>
                <a href="/siswa/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
            </td>
        </tr>
        {{-- tidak ada data --}}
      </tbody>
      @empty
      <tr colspan="6">
        <td>No data</td>
      </tr>
      @endforelse

    </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
