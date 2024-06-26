<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ,$role): Response
    {


        if (Auth::check()) {
            $userRole = Auth::user()->id_unitkerja;
            $rolesArray = explode('&', $role);

            if (in_array($userRole, $rolesArray)) {
                return $next($request);
            }
        }

        return redirect()->route('masuk')->with('error', 'Tidak dapat Melakukan Aksi Ini');
    }
        // if(Auth::check() and Auth::user()->id_unitkerja == $role){
            
        //     return $next($request);
        // }else{
        //     // Alert::error('Anda Tidak Memiliki Akses Untuk Mengakses Halaman Ini');
        //     return redirect()->route('dashboard') ->with('error', 'Tidak dapat Melakukan Aksi Ini');
            
        //     // Testing Apakah True 
        //     // ddd(Auth::user(), Auth::check(), Auth::user()->id_unitkerja == $role , $role);
        // }
    
}
