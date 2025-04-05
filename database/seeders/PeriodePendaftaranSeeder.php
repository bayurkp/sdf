<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodePendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program_studis = \App\Models\ProgramStudi::all();

        // Periode Pendaftaran Maba SNBP
        foreach ($program_studis as $program_studi) {
            \App\Models\PeriodePendaftaran::create([
                'jalur_pendaftaran_id' => 1,
                'program_studi_id' => $program_studi->id,
                'mulai' => '2024-07-24',
                'berakhir' => '2024-07-26',
            ]);
        }

        // Periode Pendaftaran Maba SNBT
        foreach ($program_studis as $program_studi) {
            \App\Models\PeriodePendaftaran::create([
                'jalur_pendaftaran_id' => 2,
                'program_studi_id' => $program_studi->id,
                'mulai' => '2024-07-29',
                'berakhir' => '2024-07-31',
            ]);
        }

        // Periode Pendaftaran Maba Mandiri
        foreach ($program_studis as $program_studi) {
            \App\Models\PeriodePendaftaran::create([
                'jalur_pendaftaran_id' => 3,
                'program_studi_id' => $program_studi->id,
                'mulai' => '2024-08-01',
                'berakhir' => '2024-08-02',
            ]);
        }
    }
}
