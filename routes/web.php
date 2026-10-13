<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;
Route::get('/', function () {
    return view('home',[
        'title'=>'Homepage'
    ]);
});


Route::get('/berita', function () {
    return view('berita',[
        'title'=> "Berita",
        "beritas" => Berita::ambilberita(),
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
Route::get('/berita/{slug}', function ($slug) {
    
// $berita=[];
// foreach($data_berita as $b){
//     if($b["slug"] === $slug){
//         $berita=$b;
//     }
// }
    return view('beritatunggal',[
        'title'=>Berita::getTitle($slug),
        'berita'=>Berita::getBerita($slug),
    ]);
});