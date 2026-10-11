<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::query()->insert([
            [
                'title' => 'Misteri Kota Awan',
                'author' => 'Nara Pratama',
                'published_year' => 2021,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Algoritma di Hari Senin',
                'author' => 'Bima Santosa',
                'published_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Petualangan Kode Biru',
                'author' => 'Salsa Wicaksono',
                'published_year' => 2025,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
