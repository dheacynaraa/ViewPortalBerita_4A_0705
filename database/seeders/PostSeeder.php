<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Presiden Prabowo Tetapkan Gaji Karyawan SPPG MBG Rp 2-7 Juta/Bulan, Kalahkan Gaji Dokter, Nakes, Guru PPPK di NTT RP 300 Ribu/Bulan',
                'content' => 'Pemerintah menetapkan Gaji karyawan Satuan Pelayanan Pemenuhan Giji (SPPG) untuk program Makan Bergizi Gratis (MBG) di NTT, seperti daerah lain, umumnya berkisar antara Rp2 juta hingga Rp3,5 juta per bulan, disesuaikan dengan UMK/UMP daerah.',
                'image' => 'berita1.jpg',
                'publisher' => 'Cika Tribunila',
                'date' => '2026-03-07',
                'published' => 'yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prabowo Kembali Soroti "Indonesia Gelap", Heran Ada yang Ingin Indonesia Kolaps',
                'content' => 'Presiden RI Prabowo Subianto kembali menyoroti berbagai kampanye di media sosial (medsos) seperti Indonesia Gelap, Indonesia Chaos, hingga Indonesia Suram saat meluncurkan BBM baru B50 di Rest Area KM 57, Cikampek, Karawang, Jawa Barat, Kamis (9/7/2026).',
                'image' => 'berita2.jpg',
                'publisher' => 'Adhyasta Dirgantara',
                'date' => '2026-07-09',
                'published' => 'yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dua Menteri Prabowo Buka Suara soal Heboh Kopdes sampai Gunung',
                'content' => 'Lokasi pembangunan Koperasi Desa/Kelurahan (Kopdeskel) Merah Putih yang dinilai jauh dari permukiman warga dan tidak strategis, contohnya di sekitar pegunungan dan hutan, menjadi sorotan di media sosial. Dua menteri di Kabinet Presiden Prabowo Subianto pun buka suara.',
                'image' => 'berita3.jpg',
                'publisher' => 'Retno Ayuningrum',
                'date' => '2026-07-03',
                'published' => 'yes',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
