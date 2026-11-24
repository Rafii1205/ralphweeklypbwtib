@extends('layouts.backend')
@section('content')
<div class="container mt-5 text-center">
<h1>Data Mahasiswa</h1>
</div>
<button class="btn-solid theme-success" type="button">+Tambah data</button>
<table class="table table-striped table-hover">
  <thead>
    <tr>
        <th>No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">prodi</th>
        <th scope="col">Email</th>
        <th scope="col">No Hp</th>
        <th scope="col">Foto</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($datas as $data)
    <tr>
        <td>1</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->NIM }}</td>
        <td>{{ $data->prodi }}</td>
        <td>{{ $data->gmail }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>foto</td>
        <td>
            <button type="button" class="btn-solid theme-primary">Edit</button>
            <button type="button" class="btn-solid theme-danger">Hapus</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection