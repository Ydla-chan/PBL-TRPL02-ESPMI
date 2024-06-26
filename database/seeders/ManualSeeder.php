<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */    
    public function run()
    {
        $standars = [1, 2, 3, 4];
        $substandars = range(1, 10);
        $sikluses = [1, 2, 3, 4, 5];
        $unitkerjas = range(3,5);
        $macamKerja = 'Kerja apa';
        $aktivitasPerkerjaan = 'Tidur';
        $waktu = 'Malam hari';

        for ($i = 1; $i <= 20; $i++) {
            DB::table('manual')->insert([
                'id_standar' => $standars[array_rand($standars)],
                'id_substandar' => $substandars[array_rand($substandars)],
                'id_siklus' => $sikluses[array_rand($sikluses)],
                'id_unitkerja' => $unitkerjas[array_rand($unitkerjas)],
                'macam_kerja' => $macamKerja,
                'aktivitas_pekerjaan' => $aktivitasPerkerjaan,
                'waktu' => $waktu,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
