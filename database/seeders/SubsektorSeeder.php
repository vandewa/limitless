<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subsektor;

class SubsektorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsektors')->truncate();
        $data = [
            ['nama_subsektor' => 'Aplikasi', 'icons' => 'subsektor/Aplikasi.png'],
            ['nama_subsektor' => 'Animasi dan Video', 'icons' => 'subsektor/Animasi.png'],
            ['nama_subsektor' => 'Arsitektur', 'icons' => 'subsektor/Arsitektur.png'],
            ['nama_subsektor' => 'Desain Komunikasi Visual', 'icons' => 'subsektor/DesainKomunikasi.png'],
            ['nama_subsektor' => 'Desain Produk', 'icons' => 'subsektor/DesainProduk.png'],
            ['nama_subsektor' => 'Desain Interior', 'icons' => 'subsektor/DesainInterior.png'],
            ['nama_subsektor' => 'Fashion', 'icons' => 'subsektor/Fashion.png'],
            ['nama_subsektor' => 'Fotografi', 'icons' => 'subsektor/Fotografer.png'],
            ['nama_subsektor' => 'Film', 'icons' => 'subsektor/Film.png'],
            ['nama_subsektor' => 'Seni Rupa', 'icons' => 'subsektor/SeniRupa.png'],
            ['nama_subsektor' => 'Seni Pertunjukan', 'icons' => 'subsektor/SeniPertunjukan.png'],
            ['nama_subsektor' => 'Penerbitan', 'icons' => 'subsektor/Penerbitan.png'],
            ['nama_subsektor' => 'Periklanan', 'icons' => 'subsektor/Periklanan.png'],
            ['nama_subsektor' => 'Kriya', 'icons' => 'subsektor/Kriya.png'],
            ['nama_subsektor' => 'Kuliner', 'icons' => 'subsektor/Kuliner.png'],
            ['nama_subsektor' => 'Musik', 'icons' => 'subsektor/Musik.png'],
            ['nama_subsektor' => 'Televisi dan Radio', 'icons' => 'subsektor/Televisi.png'],
        ];

        foreach ($data as $datum) {
            Subsektor::create($datum);
        }
    }
}