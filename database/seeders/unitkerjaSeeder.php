<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnitKerja;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data unitkerja yang akan diisi
        $unitKerjaData = [
            'Manajemen' => 2,
            'P4M' => 1,
            'Kajur' => 3,
            'SBAK' => 4,
            'KPS' => 5,
            'SBKK' => 6,
            'SBPK' => 7,
            'SBUM' => 8,
            'Perpustakaan' => 9,
            'UPT-SI' => 10,
            'PKPK' => 11,
            'P3M' => 12,
            'Audit' => 13,
            'UPT-Pengadaan' => 14,
            'UPT-PP' => 15,
            'Shilau' => 16,
            'SPI' => 17,
            'Direktur' => 18,
            'Pudir I' => 19,
            'Pudir II' => 20,
            'Pudir III' => 21,
        ];

        // Iterasi data dan insert ke database
        foreach ($unitKerjaData as $unitKerja => $id) {
            UnitKerja::create([
                'id_unitkerja' => $id,
                'nama_unitkerja' => $unitKerja,
            ]);
        }
    }
}
