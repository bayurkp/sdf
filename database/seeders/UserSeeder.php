<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $base = '100555100';
            $nim = substr($base, 0, 10 - strlen((string)$i)) . $i;

            \App\Models\User::create([
                'nama_lengkap' => fake()->name(),
                'nim' => $nim,
                'password' => Hash::make($nim),
                'jalur_pendaftaran_id' => 1,
                'program_studi_id' => 4,
                'angkatan' => '2010',
            ]);
        }
    }
}
