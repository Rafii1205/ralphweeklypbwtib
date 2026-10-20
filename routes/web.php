<?php
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
// use App\Models\Berita;
Route::get('/', function () {
    return view('home',[
        'title'=>'Homepage'
    ]);
});


Route::get('/berita',[BeritaController::class,'tampilBerita']);
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
Route::get('/berita/{slug}', [BeritaController::class,'getBerita']);