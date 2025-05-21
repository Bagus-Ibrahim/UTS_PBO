<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Mapel::create(['nama' => 'Matematika']);
    Mapel::create(['nama' => 'Bahasa Inggris']);
    }
}
