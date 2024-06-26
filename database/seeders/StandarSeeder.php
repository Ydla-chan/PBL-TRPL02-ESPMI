<?php

namespace Database\Seeders;

use App\Models\standar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $standar =[
        [
            'id_standar' => 1,
            'nama_standar' => 'Standar Pendidikan',
        ],
        [
            'id_standar' => 2,
            'nama_standar' => 'Standar Penelitian',
        ],
        [
            'id_standar' => 3,
            'nama_standar' => 'Standar Pengabdian Kepada Masyarkat',
        ],
        [
            'id_standar' => 4,
            'nama_standar' => 'Standar Layanan',
        ]
    ];

    foreach ($standar as $key => $data) {
        standar::create($data);
    }
}
}