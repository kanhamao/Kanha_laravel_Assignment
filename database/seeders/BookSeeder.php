<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Book::factory(50)->create();
        
        // You can also create specific books if needed
        // \App\Models\Book::create([
        //     'title' => 'Sample Book',
        //     'author' => 'John Doe',
        //     'published_year' => 2020,
        //     'genre' => 'Fiction',
        //     'isbn' => '1234567890123',
        //     'summary' => 'This is a sample book summary.',
        // ]);
    }
}
