<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
            $username = $request->input('username');
            $password = $request->input('password');
        
            $postFields = [
                'act' => 'Login',
                'username' => $username,
                'password' => $password,
            ];
        
            $response = Http::asForm()->post('http://sid.polibatam.ac.id/api/v1.php', $postFields);
            $jsonArray = $response->json();
        
            // Check if the login request was successful
            if ($jsonArray['error_code'] == 0) {
                $secretkey = $jsonArray['data']['secretkey'];
                Session::put('secretkey', $secretkey);
        
                $postFields = [
                    'act' => 'GetBiodata',
                    'secretkey' => $secretkey,
                ];
                $response = Http::asForm()->post('http://sid.polibatam.ac.id/api/v1.php', $postFields);
                $jsonArray = $response->json();
        
                if ($jsonArray['error_code'] == 0) {
                    $userData = $jsonArray['data'];
                
                    // Check if the user already exists in the database
                    $user = User::where('NIK', $userData['id'])->first();
                
                    if (!$user) {
                        // Redirect if user doesn't exist in the database
                        return redirect()->route('masuk')->with('error', 'Akun Anda tidak memiliki akses.');
                    }
                
                    // Update or create the user record
                    $user = User::updateOrCreate(
                        ['NIK' => $userData['id']],
                        [
                            'nama' => $userData['nama'],
                            'email' => $userData['email'],
                            'role' => $userData['role'],
                            'jk' => $userData['jk'],
                        ]
                    );
                
                    Auth::login($user);
                
                    // Fetch user data from the database
                    $userFromDb = User::find($user->id);
                
                    // Store data in the session if it's not already there
                    if (!Session::has('Name')) {
                        Session::put('Name', $userFromDb->nama);
                    }
                    if (!Session::has('Email')) {
                        Session::put('Email', $userFromDb->email);
                    }
                    if (!Session::has('NIK')) {
                        Session::put('NIK', $userFromDb->NIK);
                    }
                
                    // Redirect based on id_unitkerja
                    switch ($userFromDb->id_unitkerja) {
                        case 1:
                            return redirect()->route('dashboardP4M')->with('success', 'Selamat datang, ' . $userFromDb->nama);
                        case 2:
                            return redirect()->route('dashboardmanajemen')->with('success', 'Selamat datang, ' . $userFromDb->nama);
                        default:
                            return redirect()->route('dashboard')->with('success', 'Hi, ' . $userFromDb->nama);
                    }
                } else {
                    return redirect()->route('masuk')->with('error', 'Periksa Koneksi Internet Anda');
                }
                } else {
                    // Handle incorrect password or other login errors
                    return redirect()->route('masuk')->with('error', 'Username atau Password salah.');
                }
        }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('masuk')->with('success', 'Anda berhasil logout.');
    }
}
