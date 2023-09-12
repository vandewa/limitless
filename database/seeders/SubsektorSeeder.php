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
            ['nama_subsektor' => 'Aplikasi', 'icons' => 'subsektor/Aplikasi.png', 'color' => '#FF0000'],
            ['nama_subsektor' => 'Animasi dan Video', 'icons' => 'subsektor/Animasi.png', 'color' => '#00FF00'],
            ['nama_subsektor' => 'Arsitektur', 'icons' => 'subsektor/Arsitektur.png', 'color' => '#0000FF'],
            ['nama_subsektor' => 'Desain Komunikasi Visual', 'icons' => 'subsektor/DesainKomunikasi.png', 'color' => '#b3b300'],
            ['nama_subsektor' => 'Desain Produk', 'icons' => 'subsektor/DesainProduk.png', 'color' => '#00FFFF'],
            ['nama_subsektor' => 'Desain Interior', 'icons' => 'subsektor/DesainInterior.png', 'color' => '#FF00FF'],
            ['nama_subsektor' => 'Fashion', 'icons' => 'subsektor/Fashion.png', 'color' => '#000000'],
            ['nama_subsektor' => 'Fotografi', 'icons' => 'subsektor/Fotografer.png', 'color' => '#808080'],
            ['nama_subsektor' => 'Film', 'icons' => 'subsektor/Film.png', 'color' => '#FFC0CB'],
            ['nama_subsektor' => 'Seni Rupa', 'icons' => 'subsektor/SeniRupa.png', 'color' => '#FFA500'],
            ['nama_subsektor' => 'Seni Pertunjukan', 'icons' => 'subsektor/SeniPertunjukan.png', 'color' => '#A52A2A'],
            ['nama_subsektor' => 'Penerbitan', 'icons' => 'subsektor/Penerbitan.png', 'color' => '#800080'],
            ['nama_subsektor' => 'Periklanan', 'icons' => 'subsektor/Periklanan.png', 'color' => '#E6E6FA'],
            ['nama_subsektor' => 'Kriya', 'icons' => 'subsektor/Kriya.png', 'color' => '#ADD8E6'],
            ['nama_subsektor' => 'Kuliner', 'icons' => 'subsektor/Kuliner.png', 'color' => '#00FF7F'],
            ['nama_subsektor' => 'Musik', 'icons' => 'subsektor/Musik.png', 'color' => '#D3D3D3'],
            ['nama_subsektor' => 'Televisi dan Radio', 'icons' => 'subsektor/Televisi.png', 'color' => '#CD7F32'],
        ];

        foreach ($data as $datum) {
            Subsektor::create($datum);
        }
    }
}
