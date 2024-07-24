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
            'Teknik Sipil',
            'Arsitektur',
            'Teknik Mesin',
            'Teknik Elektro',
            'Teknologi Informasi',
            'Teknik Lingkungan',
            'Teknik Industri',
        ];

        foreach ($program_studis as $program_studi) {
            \App\Models\ProgramStudi::create([
                'nama' => $program_studi,
            ]);
        }
    }
}
