<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CapaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penilaian = ['tercapai', 'tidak tercapai', 'terlampaui'];
        $uraian_pengguna = ['Terisi', ''];
        $uraian_auditor = 'Belum tercapai banyak yang salah';
        $id_target_max = 10;
        $triwulan_max = 4;

        for ($i = 1; $i <= 20; $i++) {
            DB::table('capaian')->insert([
                'id_capaian' => $i,
                'id_target' => rand(1, $id_target_max),
                'triwulan' => rand(1, $triwulan_max),
                'penilaian_pengguna' => $penilaian[array_rand($penilaian)],
                'uraian_pengguna' => $uraian_pengguna[array_rand($uraian_pengguna)],
                'dokumen' => 'ABCC',
                'penilaian_auditor' => $penilaian[array_rand($penilaian)],
                'uraian_auditor' => $uraian_auditor,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
