<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title'=>'Homepage'
    ]);
});
Route::get('/berita', function () {
    return view('berita',[
        'title'=> "Berita"
    ]);
});
Route::get('/profile', function () {
    return view('profile',[
        "title"=> "Profile",
        "name" => "Muhammad Rafi Alfiansyah",
        "nim" => "13242520060",
        "prodi"=> "Teknologi Informasi",
        "gambar"=>"bbb.jpg"
    ]);
});
Route::get('/kontak', function () {
    return view('kontak',[
        "title"=>"Kontak"
    ]);
});