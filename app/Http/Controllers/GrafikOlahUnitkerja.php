<?php

namespace App\Http\Controllers;

use App\Models\unitkerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GrafikOlahUnitkerja extends Controller
{
    public function pengisianUnitkerja(Request $request)
{
    $units = unitkerja::all();

    // Mengambil pengguna yang sedang login
    $user = Auth::user();
    
    // Mengambil id_unitkerja dari pengguna yang sedang login
    $userUnitkerjaId = $user->id_unitkerja;

    // Mengambil unitkerja dari input request, jika ada
    $unitkerja = $request->input('unitkerja');

    $query = DB::table('capaian')
        ->join('targetmutu', 'capaian.id_target', '=', 'targetmutu.id_target')
        ->join('unitkerja', 'targetmutu.id_unitkerja', '=', 'unitkerja.id_unitkerja')
        ->select(
            'targetmutu.id_unitkerja',
            'unitkerja.nama_unitkerja',
            'capaian.triwulan',
            DB::raw('COUNT(capaian.id_capaian) as jumlah_capaian'),
            DB::raw('SUM(IF(capaian.penilaian_pengguna != "" AND capaian.penilaian_pengguna IS NOT NULL, 1, 0)) as terisi'),
            DB::raw('SUM(IF(capaian.penilaian_pengguna = "" OR capaian.penilaian_pengguna IS NULL, 1, 0)) as tidak_terisi')
        )
        ->groupBy('targetmutu.id_unitkerja', 'unitkerja.nama_unitkerja', 'capaian.triwulan');

    // Memeriksa apakah input request unitkerja ada, jika tidak gunakan id_unitkerja dari pengguna yang sedang login
    if ($unitkerja) {
        $query->where('targetmutu.id_unitkerja', $unitkerja);
    } else {
        $query->where('targetmutu.id_unitkerja', $userUnitkerjaId);
    }

    $data = $query->get();

    return view('pages.unitkerja.PengisianUnitkerja', [
        'data' => $data,
        'units' => $units,
        'selectedUnitkerja' => $unitkerja ?: $userUnitkerjaId // Mengirimkan unitkerja yang dipilih atau default ke unitkerja pengguna
    ]);
}
public function capaianunitkerja(Request $request)
{
    $units = unitkerja::all();

    // Mengambil pengguna yang sedang login
    $user = Auth::user();
    
    // Mengambil id_unitkerja dari pengguna yang sedang login
    $userUnitkerjaId = $user->id_unitkerja;

    // Mengambil unitkerja dari input request, jika ada
    $unitkerja = $request->input('unitkerja');

    $query = DB::table('capaian')
        ->join('targetmutu', 'capaian.id_target', '=', 'targetmutu.id_target')
        ->join('unitkerja', 'targetmutu.id_unitkerja', '=', 'unitkerja.id_unitkerja')
        ->select(
            'targetmutu.id_unitkerja',
            'unitkerja.nama_unitkerja',
            'capaian.triwulan',
            DB::raw('COUNT(capaian.id_capaian) as jumlah_capaian'),
            DB::raw('SUM(IF(capaian.penilaian_auditor = "Tercapai", 1, 0)) as tercapai'),
            DB::raw('SUM(IF(capaian.penilaian_auditor = "Tidak Tercapai", 1, 0)) as tidak_tercapai'),
            DB::raw('SUM(IF(capaian.penilaian_auditor = "Terlampaui", 1, 0)) as terlampaui')
        )
        ->groupBy('targetmutu.id_unitkerja', 'unitkerja.nama_unitkerja', 'capaian.triwulan');

    // Memeriksa apakah input request unitkerja ada, jika tidak gunakan id_unitkerja dari pengguna yang sedang login
    if ($unitkerja) {
        $query->where('targetmutu.id_unitkerja', $unitkerja);
    } else {
        $query->where('targetmutu.id_unitkerja', $userUnitkerjaId);
    }

    $data = $query->get();

    return view('pages.unitkerja.unitkerja', [
        'data' => $data,
        'units' => $units,
        'selectedUnitkerja' => $unitkerja ?: $userUnitkerjaId // Mengirimkan unitkerja yang dipilih atau default ke unitkerja pengguna
    ]);
}
}
