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
        $beritas=Berita::all();
        foreach ($beritas as $berita){
            if($berita['slug'] === $slug){
                $beritatunggal=$berita;
            }
        }
        return view('beritatunggal',[
        'title'=> $beritatunggal['judul'],
        'berita'=>$beritatunggal,
    ]);
    }
}
