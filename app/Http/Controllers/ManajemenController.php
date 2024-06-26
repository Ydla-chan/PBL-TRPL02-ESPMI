<?php

namespace App\Http\Controllers;

use App\Models\capaian;
use App\Models\unitkerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ManajemenController extends Controller
{
    
    public function index()
    {
        // Logic to display user profile
        $user = auth()->user();
        $unitKerja = unitkerja::findOrFail($user->id_unitkerja);

        return view('pages.manajemen.profile', [
            'user' => $user,
            'unitKerja' => $unitKerja,
        ]);
    }

    public function updateProfile(Request $request)
{
    // Validate the request
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Check if the file is present in the request
    if ($request->hasFile('photo')) { 
        // Store the uploaded file
        $stored_file = $request->file('photo')->store('public/avatars');

        // Get the basename of the stored file
        $filename = pathinfo($stored_file, PATHINFO_BASENAME);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile URL
        $user->update(['urlProfile' => $filename]);

        // Redirect back to profile with a success message
        return redirect()->route('ProfileManajemen')->with('success-update-profile', 'Profil Berhasil Diubah');
    } else {
        // Redirect back to profile with an error message if no file was uploaded
        return redirect()->route('ProfileManajemen')->with('error', 'File tidak ditemukan atau tidak valid.');

}

}

public function PencapaianTriwulan(Request $request)
    {
        // Receive user input -> Triwulan to display
        $triwulan = $request->input('triwulan');
        
        // Fetch data based on Triwulan and Auditor's assessment
        $query = capaian::select('Triwulan', 'penilaian_auditor');
        
        // Check if a specific Triwulan is selected
        if ($triwulan) {
            $query->where('Triwulan', $triwulan);
        }
        
        // Retrieve data and group by Triwulan
        $data = $query->get()
            ->groupBy('Triwulan')
            ->map(function ($item) {
                return [
                    'tercapai' => $item->where('penilaian_auditor', 'tercapai')->count(),
                    'tidak_tercapai' => $item->where('penilaian_auditor', 'tidak tercapai')->count(),
                    'terlampui' => $item->where('penilaian_auditor', 'terlampui')->count(),
                ];
            });
        
        return view('pages.manajemen.PencapaianTriwulan', ['data' => $data, 'selectedTriwulan' => $triwulan]);
    }
    public function PencapainStandar(Request $request)
    {
        $standar = $request->input('standar');
    
        $query = DB::table('capaian')
            ->join('targetmutu', 'capaian.id_target', '=', 'targetmutu.id_target')
            ->join('standar', 'targetmutu.id_standar', '=', 'standar.id_standar')
            ->select(
                'standar.nama_standar',
                DB::raw('COUNT(capaian.id_capaian) as jumlah_capaian'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "tercapai", 1, 0)) as tercapai'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "tidak tercapai", 1, 0)) as tidak_tercapai'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "terlampaui", 1, 0)) as terlampaui')
            )
            ->groupBy('standar.id_standar', 'standar.nama_standar');
    
        if ($standar) {
            $query->where('standar.id_standar', $standar);
        }
    
        $data = $query->get();
    
        return view('pages.manajemen.PencapaianStandar', [
            'data' => $data,
            'selected_standar' => $standar 
        ]);
    } 
    public function PencapaianSiklus(Request $request)
    {
        $siklus = $request->input('siklus');
    
        // Query to get data based on siklus
        $query = Capaian::query()
            ->select(
                'siklus.id_siklus',
                'siklus.nama_siklus',
                DB::raw('COUNT(capaian.id_capaian) as jumlah_capaian'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "Tercapai", 1, 0)) as tercapai'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "Tidak Tercapai", 1, 0)) as tidak_tercapai'),
                DB::raw('SUM(IF(capaian.penilaian_auditor = "terlampui", 1, 0)) as terlampui')
            )
            ->leftJoin('targetmutu', 'capaian.id_target', '=', 'targetmutu.id_target')
            ->leftJoin('manual', 'targetmutu.id_standar', '=', 'manual.id_standar')
            ->leftJoin('siklus', 'manual.id_siklus', '=', 'siklus.id_siklus')
            ->groupBy('siklus.id_siklus', 'siklus.nama_siklus');
    
        if ($siklus) {
            $query->where('siklus.id_siklus', $siklus);
        }
    
        $data = $query->get();
    
        return view('pages.manajemen.PencapaianSiklus', [
            'data' => $data,
            'selected_siklus' => $siklus 
        ]);
    }

    public function PencapaianUnitkerja(Request $request)
    {
        $units = unitkerja::all();
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
                DB::raw('SUM(IF(capaian.penilaian_auditor = "terlampui", 1, 0)) as terlampui')
            )
            ->groupBy('targetmutu.id_unitkerja', 'unitkerja.nama_unitkerja', 'capaian.triwulan');
    
        if ($unitkerja) {
            $query->where('targetmutu.id_unitkerja', $unitkerja);
        }
    
        $data = $query->get();
    
        return view('pages.manajemen.PencapaianUnitkerja', ['data' => $data, 'units'=> $units, 'selected_unitkerja' => $unitkerja ]);
    }

    public function StatusPengisian(Request $request)
    {

        $units = unitkerja::all();
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
                DB::raw('SUM(IF(capaian.penilaian_pengguna = "" OR capaian.penilaian_pengguna IS NULL, 1, 0)) as tidak_terisi'
                )
            )
            ->groupBy('targetmutu.id_unitkerja', 'unitkerja.nama_unitkerja', 'capaian.triwulan');
    
        if ($unitkerja) {
            $query->where('targetmutu.id_unitkerja', $unitkerja);
        }
    
        $data = $query->get();
    
        return view('pages.manajemen.StatusPengisian', [
            'data' => $data, 
            'selectedUnitkerja' => $unitkerja, 
            'units' => $units
        ]);
    }

    public function PerbandinganUnitkerja(Request $request)
{
    $units = unitkerja::all();
    $unitkerja1 = $request->input('unitkerja1');
    $unitkerja2 = $request->input('unitkerja2');
    $triwulan = $request->input('triwulan');

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
            DB::raw('SUM(IF(capaian.penilaian_auditor = "terlampui", 1, 0)) as terlampui')
        )
        ->groupBy('targetmutu.id_unitkerja', 'unitkerja.nama_unitkerja', 'capaian.triwulan');

    if ($unitkerja1) {
        $query->where('targetmutu.id_unitkerja', $unitkerja1);
    }

    if ($unitkerja2) {
        $query->orWhere('targetmutu.id_unitkerja', $unitkerja2);
    }

    if ($triwulan) {
        $query->where('capaian.triwulan', $triwulan);
    }

    $data = $query->get();

    // Calculate percentages
    foreach ($data as $item) {
        $item->persen_tercapai = ($item->jumlah_capaian > 0) ? ($item->tercapai / $item->jumlah_capaian) * 100 : 0;
        $item->persen_tidak_tercapai = ($item->jumlah_capaian > 0) ? ($item->tidak_tercapai / $item->jumlah_capaian) * 100 : 0;
        $item->terlampui = ($item->jumlah_capaian > 0) ? ($item->terlampui / $item->jumlah_capaian) * 100 : 0;
    }

    return view('pages.manajemen.PerbandinganUnitkerja', [
        'data' => $data,
        'units' => $units,
        'selectedUnitkerja1' => $unitkerja1,
        'selectedUnitkerja2' => $unitkerja2,
        'selectedTriwulan' => $triwulan
    ]);
}
}
