<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Drama;

class DramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Drama::create([
            'title' => 'Crash Course in Romance',
            'genre' => 'Romance/Drama',
            'episodes' => 16,
            'watched' => false
    ]);

        Drama::create([
            'title' => 'The Glory',
            'genre' => 'Thriller/Drama',
            'episodes' => 16,
            'watched' => false
    ]);

        Drama::create([
            'title' => 'Extraordinary Attorney Woo',
            'genre' => 'Legal/Drama',
            'episodes' => 16,
            'watched' => false
    ]);
    }
}
