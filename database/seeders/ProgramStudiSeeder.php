<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program_studis = [
            'Arsitektur',
            'Teknik Elektro',
            'Teknik Mesin',
            'Teknologi Informasi',
            'Teknik Sipil',
            'Teknik Industri',
            'Teknik Lingkungan',
        ];

        foreach ($program_studis as $program_studi) {
            \App\Models\ProgramStudi::create([
                'nama' => $program_studi,
            ]);
        }
    }
}
