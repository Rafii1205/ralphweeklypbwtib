<?php

namespace Database\Seeders;
// namespace Database\Factories\BeritaFactory;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Factories\BeritaFactory;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // DB::table('users')->insert([
        //     'name' => 'Muhammad Sumbul',
        //     'email' => 'mbul@gmail.com',
        //     'password' => Hash::make('apaja100x'),
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        berita::factory()->count(5)->create();
    }
}
