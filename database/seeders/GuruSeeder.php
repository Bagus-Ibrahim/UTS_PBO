<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
        'nama' => 'Budi Santoso',
        'nip' => '19780012345',
        'mapel_id' => 1,
    ]);
    }
}
