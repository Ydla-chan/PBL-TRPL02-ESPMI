<?php

use App\Http\Controllers\GrafikOlahUnitkerja;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\unitkerjacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GrafikOlahController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Controllers\ManajemenAkunController;

/*.
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Middwelare Guest
// Halaman Login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('masuk');
// Proses Login dengan api 
Route::post('/login', [AuthController::class, 'login'])->name('login');



// Route middleware (Auth) 
Route::middleware('auth')->group(function () {

    // Global Route
    Route::get('/dashboardP4M', function () {return view('pages.P4M.dashboard');})->name('dashboardP4M')->middleware('role:1'); //Route Dashboard P4M
    Route::get('/dashboard', function () {return view('pages.unitkerja.dashboard');})->name('dashboard'); //Route Dashboard Unitkerja Lainnya 
    Route::get('/dashboardmanajemen', function () {return view('pages.manajemen.dashboard');})->name('dashboardmanajemen')->middleware('role:2'); // Route Dashboard Manajemen
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    
    // Route P4M
    Route::get('/profile', [ProfileUserController::class, 'index'])->name('profilep4m');
    Route::post('/updatep4m', [ProfileUserController::class, 'updateProfile'])->name('updatep4m');
    Route::get('/manajemen', [ManajemenAkunController::class, 'showForm'])->name('manajemen')->middleware('role:1');
    Route::post('/manajemenakun/store', [ManajemenAkunController::class, 'store'])->name('manajemenakun.store');
    Route::get('/manajemen/edit/{id}', [ManajemenAkunController::class, 'edit'])->name('manajemenakun.edit');
    Route::put('/manajemen/edit/{id}', [ManajemenAkunController::class, 'update'])->name('manajemenakun.update');
    Route::delete('/manajemen/{id}', [ManajemenAkunController::class, 'delete'])->name('manajemenakun.delete');
    Route::get('/standar', [GrafikOlahController::class, 'PencapainStandar'])->name('standar')->middleware('role:1');
    Route::get('/triwulan', [GrafikOlahController::class, 'PencapaianTriwulan'])->name('triwulan')->middleware('role:1');
    Route::get('/unitkerja', [GrafikOlahController::class, 'PencapaianUnitkerja'])->name('unitkerja')->middleware('role:1');
    Route::get('/pengisian', [GrafikOlahController::class, 'StatusPengisian'])->name('pengisian')->middleware('role:1');
    Route::get('/perbandingan', [GrafikOlahController::class, 'PerbandinganUnitkerja'])->name('perbandingan')->middleware('role:1');
    Route::get('/siklus', [GrafikOlahController::class, 'PencapaianSiklus'])->name('siklus')->middleware('role:1');

    // Route Manajemen
    Route::get('/ProfileManajemen', [ManajemenController::class, 'index'])->name('ProfileManajemen')->middleware('role:2');
    Route::post('/updatemanajemen', [ManajemenController::class, 'updateProfile'])->name('updatemanajemen')->middleware('role:2');
    Route::get('/triwulann', [ManajemenController::class, 'PencapaianTriwulan'])->name('triwulann')->middleware('role:2');
    Route::get('/standarr', [ManajemenController::class, 'PencapainStandar'])->name('standarr')->middleware('role:2');
    Route::get('/sikluss', [ManajemenController::class, 'PencapaianSiklus'])->name('sikluss')->middleware('role:2');
    Route::get('/unitkerjaa', [ManajemenController::class, 'PencapaianUnitkerja'])->name('unitkerjaa')->middleware('role:2');
    Route::get('/pengisiann', [ManajemenController::class, 'StatusPengisian'])->name('pengisiann')->middleware('role:2');
    Route::get('/perbandingann', [ManajemenController::class, 'PerbandinganUnitkerja'])->name('perbandingann')->middleware('role:2');

    // Route Unit Kerja 
    Route::get('/pengisianunit', [GrafikOlahUnitkerja::class, 'pengisianUnitkerja'])->name('pengisianUnitkerja');
    Route::get('/capaianunitkerja', [GrafikOlahUnitkerja::class, 'capaianunitkerja'])->name('capaianunitkerja');
    Route::get('/profileunitkerja', [unitkerjacontroller::class, 'index'])->name('profileunitkerja');
    Route::post('/updateunitkerja', [unitkerjacontroller::class, 'updateProfile'])->name('updateunitkerja');




});






