<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita=[
    [
        "judul" => "Mahasiswa ti",
        "slug" => "mahasiswa-ti",
        "penulis" => "Admin",
        "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae dicta alias consequuntur. Voluptates dicta eum ullam quae, repellat nulla quidem dolor repudiandae delectus ipsa velit laborum impedit blanditiis nam deleniti. Officiis dolores et maxime possimus qui. Magnam suscipit hic beatae asperiores quod? Consectetur corporis ducimus odit atque mollitia quibusdam autem nam quisquam quasi porro, labore amet ullam soluta perferendis, debitis natus! Dolorum velit maxime omnis cum aliquid quia? Atque quo, aspernatur, recusandae eius perferendis hic esse excepturi pariatur ullam animi expedita odio, maiores nobis tempore dignissimos blanditiis? Voluptas ratione placeat, doloremque deleniti totam corrupti laudantium inventore minus numquam voluptatibus cum!"
    ],
    [
        "judul" => "Dosen ti",
        "slug" => "dosen-ti",
        "penulis" => "Admin",
        "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae dicta alias consequuntur. Voluptates dicta eum ullam quae, repellat nulla quidem dolor repudiandae delectus ipsa velit laborum impedit blanditiis nam deleniti. Officiis dolores et maxime possimus qui. Magnam suscipit hic beatae asperiores quod? Consectetur corporis ducimus odit atque mollitia quibusdam autem nam quisquam quasi porro, labore amet ullam soluta perferendis, debitis natus! Dolorum velit maxime omnis cum aliquid quia? Atque quo, aspernatur, recusandae eius perferendis hic esse excepturi pariatur ullam animi expedita odio, maiores nobis tempore dignissimos blanditiis? Voluptas ratione placeat, doloremque deleniti totam corrupti laudantium inventore minus numquam voluptatibus cum!"
    ],
];

public static function ambilberita(){

    return self::$data_berita;
}
public static function getTitle($slug){

    $berita=self::getBerita($slug);
    return $berita["judul"];

}
public static function getBerita($slug){
    $beritas=self::$data_berita;
    $berita=[];
    foreach($beritas as $b){
        if($b["slug"]===$slug){
            $berita=$b;
        }
    }
    return $berita;
}
}
