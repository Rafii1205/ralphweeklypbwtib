@extends('layouts.main')
@section('content')
<div class="container mt-5">
    @foreach($beritas as $berita)
    <h2><a href="/berita/{{$berita['slug']}}">{{$berita["judul"]}}</a></h2>
    <h3>{{$berita["penulis"]}}</h3>
    <p>{{$berita["konten"]}}</p>
    @endforeach
    </div>
@endsection