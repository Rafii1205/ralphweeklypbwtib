<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Muhammad sumbul',
            'NIM' => 13242520061,
            'prodi' => 'Teknologi Informasi',
            'gmail' => 'fian@gmail.com',
            'no_hp' => '0888888888888',
            'foto' => 'Forger.jpg'

        ]);
        Mahasiswa::create([
            'nama' => 'Muhammad Twilight',
            'NIM' => 13242520062,
            'prodi' => 'Teknologi Informasi',
            'gmail' => 'rian@gmail.com',
            'no_hp' => 62888888888888,
            'foto' => 'Forger.jpg'
        ]);
    }
}
