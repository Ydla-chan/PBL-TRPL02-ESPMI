<?php

namespace App\Http\Controllers;

use App\Models\unitkerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class unitkerjacontroller extends Controller
{
    
    public function index()
    {
        // Logic to display user profile
        $user = auth()->user();
        $unitKerja = unitkerja::findOrFail($user->id_unitkerja);

        return view('pages.unitkerja.profile', [
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
        return redirect()->route('profileunitkerja')->with('success-update-profile', 'Profil Berhasil Diubah');
    } else {
        // Redirect back to profile with an error message if no file was uploaded
        return redirect()->route('profileunitkerja')->with('error', 'File tidak ditemukan atau tidak valid.');

}

}
}
