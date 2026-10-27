<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilBerita(){
        return view('berita',[
        'title'=> "Berita",
        "beritas" => Berita::all(),
    ]);
    }
    public function getBerita($slug){
        $beritatunggal = Berita::all()->firstWhere('slug', $slug);
        abort_if($beritatunggal === null, 404);
        return view('beritatunggal',[
        'title'=> $beritatunggal['judul'],
        'berita'=>$beritatunggal,
    ]);
    }
}
