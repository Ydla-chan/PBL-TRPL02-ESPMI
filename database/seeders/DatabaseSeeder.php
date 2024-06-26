<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Proses Pemanggilan Seeder
        $this -> call([
            SiklusSeeder::class,
            StandarSeeder::class,
            unitKerjaSeeder::class,
            UserSeeder::class,
            CapaianSeeder::class,
            ManualSeeder::class,
            TargetSeeder::class,
        ]);
    }
}
