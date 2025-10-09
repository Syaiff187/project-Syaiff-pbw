<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Festival Budaya Nusantara 2025 Resmi Dibuka di Yogyakarta",
            "slug" => "festival-budaya-nusantara-2025-resmi-dibuka-di-yogyakarta",
            "penulis" => "Syaif",
            "konten" => "Festival Budaya Nusantara 2025 resmi dibuka pada hari Rabu, 1 Oktober 2025, di Alun-Alun Utara Yogyakarta. Acara ini menghadirkan lebih dari 200 peserta dari berbagai daerah di Indonesia dengan menampilkan seni tari, musik tradisional, hingga kuliner khas. Ribuan pengunjung memadati area festival sejak pagi hari. Pemerintah daerah berharap acara tahunan ini dapat memperkuat persatuan bangsa sekaligus mempromosikan potensi budaya Indonesia ke mancanegara.",
        ],
        [
            "judul" => "Peluncuran Satelit Merah Putih 3 Sukses Dilakukan",
            "slug" => "Peluncuran-satelit-merah-putih-3-sukses-dilakukan",
            "penulis" => "parel",
            "konten" => "Indonesia kembali mencatat sejarah penting di bidang teknologi antariksa setelah sukses meluncurkan Satelit Merah Putih 3 pada Selasa, 30 September 2025. Satelit yang diluncurkan dari Kennedy Space Center, Amerika Serikat, ini akan memperkuat jaringan komunikasi nasional sekaligus mendukung pengembangan internet di daerah terpencil. Menteri Komunikasi menyatakan bahwa satelit ini menjadi langkah strategis dalam mewujudkan pemerataan akses digital di seluruh wilayah Indonesia.",
        ],
        [
            "judul" => "AI Makin Canggih",
            "slug" => "ai-makin-canggih",
            "penulis" => "Ahok",
            "konten" => "Kecerdasan buatan (AI) berkembang pesat dan kini banyak diterapkan di berbagai bidang, mulai dari kesehatan, transportasi, hingga pendidikan. Meski membantu manusia, pakar mengingatkan agar AI digunakan secara bijak. Regulasi yang jelas sangat dibutuhkan untuk mencegah penyalahgunaan teknologi ini.",
        ],
    ];

public static function ambildata()
    {
        return Self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_beritas = Self::$data_berita;
   
   $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }
    return $new_berita;
    }
}
