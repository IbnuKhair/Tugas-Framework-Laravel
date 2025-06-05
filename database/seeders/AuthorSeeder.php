<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Author::insert([
            [
                'name' => 'Tere Liye',
                'bio' => 'Penulis novel-novel populer bertema kehidupan dan cinta.'
            ],
            [
                'name' => 'Mark Manson',
                'bio' => 'Penulis buku pengembangan diri dengan pendekatan realistis.'
            ],
            [
                'name' => 'Sapardi Djoko Damono',
                'bio' => 'Penyair Indonesia terkenal dengan karya puitis tentang cinta dan kehidupan.'
            ],
            [
                'name' => 'J.K. Rowling',
                'bio' => 'Penulis seri Harry Potter yang terkenal di seluruh dunia.'
            ],
            [
                'name' => 'Andrea Hirata',
                'bio' => 'Penulis novel Laskar Pelangi, kisah inspiratif anak-anak Belitung.'
            ],
        ]);
    }
}
