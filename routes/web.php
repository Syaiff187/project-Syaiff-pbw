<?php

use App\HTTP\controllers\MahasiswaController;
use App\HTTP\controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "nama" => "AHOG", 
        "nohp" => "08684637390",
        "foto" => "img/Ahok.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index'] );

Route::get('/berita/{slug}', [Beritacontroller::class, 'tampildata'] );

Route::get('/mahasiswa', [MahasiswaController::class, 'index'] )->name('mahasiswa');

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "gmail" => "koclokarif5@gmail.com",
        
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "pembuat" => "Mahasiswa Universitas Muhammadiyah Semarang",
        
    ]);
});


