<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $standars = range(1, 4);
        $substandars = range(1, 10);
        $unitkerjas = range(3,5);
        $judul = 'aku turu';
        $butirs = [22, 20, 23];
        $standarMutu = 'jnejkfnw';
        $targetCapaian = 'wfwef';
        $indikator = 'wefwef';
        $caraMengukur = 'wefwef';
        $targetWaktu = 'wefwef';

        for ($i = 1; $i <= 20; $i++) {
            DB::table('targetmutu')->insert([
                'id_standar' => $standars[array_rand($standars)],
                'id_substandar' => $substandars[array_rand($substandars)],
                'id_unitkerja' => $unitkerjas[array_rand($unitkerjas)],
                'judul' => $judul,
                'butir' => $butirs[array_rand($butirs)],
                'standar_mutu' => $standarMutu,
                'target_capaian' => $targetCapaian,
                'indikator' => $indikator,
                'cara_mengukur' => $caraMengukur,
                'target_waktu' => $targetWaktu,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
