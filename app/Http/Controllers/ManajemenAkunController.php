<?php

namespace App\Http\Controllers;

use App\Models\unitkerja;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ManajemenAkunController extends Controller
{
    public function showForm()
    {
        $user = User::with('unitKerja')->get();
           // Retrieve the list of unit kerja
           $unitkerja = unitkerja::all();
        return view('pages.P4M.manajemen',[
            'user' => $user,
            'unitkerja' => $unitkerja
        ]);
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Akun berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'NIK tidak ditemukan.');
        }
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        $unitkerja = UnitKerja::all();

        if (!$user) {
            return redirect('/manajemenakun')->with([
                'notifikasi' => 'Data Mahasiswa tidak ditemukan!',
                'type' => 'error'
            ]);
        }

        return view('pages.edituser', [
            'user' => $user,
            'unitkerja' => $unitkerja
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->update($request->all());
            return redirect('/manajemen')->with('success', 'Akun berhasil diupdate.');
        } else {
            return redirect('/manajemen')->with('error', 'NIK tidak ditemukan.');
        }
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|unique:user,NIK',
            'id_unitkerja' => 'required',
        ], [
            'NIK.unique' => 'NIK sudah terdaftar. Silakan gunakan NIK yang lain.',
        ]);
        
        // Proses Pembuatan Record Baru 
        $user = new User;
        // Proses pembuatan id Acak 
        $user->id = Str::uuid()->toString(); 
        // Hasil Inputan Usser 
        $user->NIK = $validatedData['NIK'];
        $user->id_unitkerja = $validatedData['id_unitkerja'];
        // Proses menyimpan data (id,NIK,id_unitkerja)
        $user->save();
        
        // Proses Pengembalian informasi ke halaman depan 
        return response()->json(['message' => 'Akun Berhasil Ditambahkan'], 200);
    }
}