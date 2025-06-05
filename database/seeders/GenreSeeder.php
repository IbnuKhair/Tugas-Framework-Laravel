<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'action',
            'description' => 'Genre yang penuh aksi, ketegangan, dan adegan menegangkan.'
        ]);

        Genre::create([
            'name' => 'romance',
            'description' => 'Genre yang berfokus pada kisah cinta dan hubungan emosional.'
        ]);

        Genre::create([
            'name' => 'fantasi',
            'description' => 'Genre dengan elemen magis, dunia imajinatif, dan kekuatan supranatural.'
        ]);

    }
}
