<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Book::create([
        'title' => 'Pulang',
        'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
        'price' => 185000,
        'stock' => 15,
        'cover_photo' => 'pulang.jpg',
        'author_id' => 1, // pastikan ID ini sesuai dengan data di tabel authors
    ]);

    Book::create([
        'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
        'description' => 'Buku yang membahas filosofi hidup dengan cara yang realistis.',
        'price' => 118000,
        'stock' => 5,
        'cover_photo' => 'sebuah_seni.jpg',
        'author_id' => 2,
    ]);

    Book::create([
        'title' => 'Hujan Bulan Juni',
        'description' => 'Kumpulan puisi tentang cinta dan kesunyian karya Sapardi Djoko Damono.',
        'price' => 43000,
        'stock' => 14,
        'cover_photo' => 'hujan_bulan_juni.jpg',
        'author_id' => 3,
    ]);

    Book::create([
        'title' => 'Laut Bercerita',
        'description' => 'Kisah fiksi sejarah tentang aktivisme dan kehilangan.',
        'price' => 95000,
        'stock' => 10,
        'cover_photo' => 'laut_bercerita.jpg',
        'author_id' => 4,
    ]);

    Book::create([
        'title' => 'Negeri 5 Menara',
        'description' => 'Perjalanan hidup para santri dengan semangat tinggi dan mimpi besar.',
        'price' => 85000,
        'stock' => 20,
        'cover_photo' => 'negeri_5_menara.jpg',
        'author_id' => 5,
    ]);
}
}
