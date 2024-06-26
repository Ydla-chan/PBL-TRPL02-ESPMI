<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Siklus; // Sesuaikan dengan namespace dan model Siklus Anda

class SiklusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siklus = [
            [
                'id_siklus' => 1,
                'nama_siklus' => 'Penetapan',
            ],
            [
                'id_siklus' => 2,
                'nama_siklus' => 'Pelaksanaan',
            ],
            [
                'id_siklus' => 3,
                'nama_siklus' => 'Evaluasi',
            ],
            [
                'id_siklus' => 4,
                'nama_siklus' => 'Pengendalian',
            ],
            [
                'id_siklus' => 5,
                'nama_siklus' => 'Peningkatan',
            ],
        ];

        // Masukkan data siklus ke dalam database
        foreach ($siklus as $data) {
            Siklus::create($data);
        }
    }
}
