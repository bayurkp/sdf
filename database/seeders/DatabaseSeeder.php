<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Middleware\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            ProgramStudiSeeder::class,
            JalurPendaftaranSeeder::class,
            PeriodePendaftaranSeeder::class,
            UserSeeder::class,
        ]);
    }
}
