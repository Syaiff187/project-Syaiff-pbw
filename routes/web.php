<?php

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
        "nama" => "Ach Syaif", 
        "nohp" => "08684637390",
        "foto" => "img/syaif.webp",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Festival Budaya Nusantara 2025 Resmi Dibuka di Yogyakarta",
            "penulis" => "Syaif",
            "konten" => "Festival Budaya Nusantara 2025 resmi dibuka pada hari Rabu, 1 Oktober 2025, di Alun-Alun Utara Yogyakarta. Acara ini menghadirkan lebih dari 200 peserta dari berbagai daerah di Indonesia dengan menampilkan seni tari, musik tradisional, hingga kuliner khas. Ribuan pengunjung memadati area festival sejak pagi hari. Pemerintah daerah berharap acara tahunan ini dapat memperkuat persatuan bangsa sekaligus mempromosikan potensi budaya Indonesia ke mancanegara.",
        ],
        [
            "judul" => "Peluncuran Satelit Merah Putih 3 Sukses Dilakukan",
            "penulis" => "parel",
            "konten" => "Indonesia kembali mencatat sejarah penting di bidang teknologi antariksa setelah sukses meluncurkan Satelit Merah Putih 3 pada Selasa, 30 September 2025. Satelit yang diluncurkan dari Kennedy Space Center, Amerika Serikat, ini akan memperkuat jaringan komunikasi nasional sekaligus mendukung pengembangan internet di daerah terpencil. Menteri Komunikasi menyatakan bahwa satelit ini menjadi langkah strategis dalam mewujudkan pemerataan akses digital di seluruh wilayah Indonesia.",
        ],
    ];

    return view('berita',[
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "gmail" => "koclokarif5@gmail.com"
        
    ]);
});

