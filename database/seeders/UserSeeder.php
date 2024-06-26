<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];

        for ($i = 1; $i <= 120; $i++) {
            $unitKerjaId = $i === 3 ? 1 : rand(3, 21);
            $users[] = [
                'id' => (string) Str::uuid(),
                'id_unitkerja' => $unitKerjaId,
                'NIK' => '4342301' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'jk' => 'P',
                'role' => 'user',
                'notelp' => '08' . random_int(100000000, 999999999),
                'urlProfile' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('user')->insert($users);
    }
}