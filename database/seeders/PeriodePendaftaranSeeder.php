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

            switch ($program_studi->id) {
                    // teknik sipil 
                case 1:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-26 09:00:00',
                        'berakhir' => '2024-07-26 12:00:00',
                    ]);
                    break;

                    // arsitektur    
                case 2:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-26 09:00:00',
                        'berakhir' => '2024-07-26 12:00:00',
                    ]);
                    break;

                    // teknik mesin    
                case 3:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-25 09:00:00',
                        'berakhir' => '2024-07-25 12:00:00',
                    ]);
                    break;

                    // teknik elektro 
                case 4:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-25 12:00:00',
                        'berakhir' => '2024-07-25 15:00:00',
                    ]);
                    break;

                    // teknologi informasi 
                case 5:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-26 13:00:00',
                        'berakhir' => '2024-07-26 15:00:00',
                    ]);
                    break;

                    // teknik lingkungan
                case 6:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-25 12:00:00',
                        'berakhir' => '2024-07-25 15:00:00',
                    ]);
                    break;

                    // teknik industri
                case 7:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 1,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-25 09:00:00',
                        'berakhir' => '2024-07-25 12:00:00',
                    ]);
                    break;

                default:
                    break;
            }

            // \App\Models\PeriodePendaftaran::create([
            //     'jalur_pendaftaran_id' => 1,
            //     'program_studi_id' => $program_studi->id,
            //     'mulai' => '2024-07-25 09:00:00',
            //     'berakhir' => '2024-07-26 15:00:00',
            // ]);
        }

        // Periode Pendaftaran Maba SNBT
        foreach ($program_studis as $program_studi) {
            switch ($program_studi->id) {
                    // teknik sipil 
                case 1:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-30 09:00:00',
                        'berakhir' => '2024-07-30 12:00:00',
                    ]);
                    break;

                    // arsitektur    
                case 2:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-30 09:00:00',
                        'berakhir' => '2024-07-30 12:00:00',
                    ]);
                    break;

                    // teknik mesin    
                case 3:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-29 09:00:00',
                        'berakhir' => '2024-07-29 12:00:00',
                    ]);
                    break;

                    // teknik elektro 
                case 4:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-29 12:00:00',
                        'berakhir' => '2024-07-29 15:00:00',
                    ]);
                    break;

                    // teknologi informasi 
                case 5:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-30 13:00:00',
                        'berakhir' => '2024-07-30 15:00:00',
                    ]);
                    break;

                    // teknik lingkungan
                case 6:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-29 12:00:00',
                        'berakhir' => '2024-07-29 15:00:00',
                    ]);
                    break;

                    // teknik industri
                case 7:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 2,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-29 09:00:00',
                        'berakhir' => '2024-07-29 12:00:00',
                    ]);
                    break;

                default:
                    break;
            }

            // \App\Models\PeriodePendaftaran::create([
            //     'jalur_pendaftaran_id' => 2,
            //     'program_studi_id' => $program_studi->id,
            //     'mulai' => '2024-07-29 09:00:00',
            //     'berakhir' => '2024-07-30 15:00:00',
            // ]);
        }

        // Periode Pendaftaran Maba Mandiri
        foreach ($program_studis as $program_studi) {
            switch ($program_studi->id) {
                    // teknik sipil 
                case 1:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-08-1 09:00:00',
                        'berakhir' => '2024-08-1 12:00:00',
                    ]);
                    break;

                    // arsitektur    
                case 2:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-08-1 09:00:00',
                        'berakhir' => '2024-08-1 12:00:00',
                    ]);
                    break;

                    // teknik mesin    
                case 3:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-31 09:00:00',
                        'berakhir' => '2024-07-31 12:00:00',
                    ]);
                    break;

                    // teknik elektro 
                case 4:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-31 12:00:00',
                        'berakhir' => '2024-07-31 15:00:00',
                    ]);
                    break;

                    // teknologi informasi 
                case 5:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-08-1 13:00:00',
                        'berakhir' => '2024-08-1 15:00:00',
                    ]);
                    break;

                    // teknik lingkungan
                case 6:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-31 12:00:00',
                        'berakhir' => '2024-07-31 15:00:00',
                    ]);
                    break;

                    // teknik industri
                case 7:
                    \App\Models\PeriodePendaftaran::create([
                        'jalur_pendaftaran_id' => 3,
                        'program_studi_id' => $program_studi->id,
                        'mulai' => '2024-07-31 09:00:00',
                        'berakhir' => '2024-07-31 12:00:00',
                    ]);
                    break;

                default:
                    break;
            }

            // \App\Models\PeriodePendaftaran::create([
            //     'jalur_pendaftaran_id' => 3,
            //     'program_studi_id' => $program_studi->id,
            //     'mulai' => '2024-07-31 09:00:00',
            //     'berakhir' => '2024-07-31 15:00:00',
            // ]);
        }
    }
}
