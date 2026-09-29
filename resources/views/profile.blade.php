@extends('layouts.main')

@section('content')
    <center>
    <h1>PROFILEE</h1>
    <p>Nama :{{$name}}</p>
    <p>Nim :{{$nim}}</p>
    <p>Prodi :  {{$prodi}}</p>
    <img src="images/{{$gambar}}" alt="">
</center>
@endsection