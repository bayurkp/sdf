<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JalurPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jalur_pendaftarans = [
            'SNBP',
            'SNBT',
            'Mandiri',
        ];

        foreach ($jalur_pendaftarans as $jalur_pendaftaran) {
            \App\Models\JalurPendaftaran::create([
                'nama' => $jalur_pendaftaran,
            ]);
        }
    }
}
