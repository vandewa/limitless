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
            ['nama_subsektor' => 'Aplikasi'],
            ['nama_subsektor' => 'Animasi dan Video'],
            ['nama_subsektor' => 'Arsitektur'],
            ['nama_subsektor' => 'Desain Komunikasi Visual'],
            ['nama_subsektor' => 'Desain Produk'],
            ['nama_subsektor' => 'Desain Interior'],
            ['nama_subsektor' => 'Fashion'],
            ['nama_subsektor' => 'Fotografi'],
            ['nama_subsektor' => 'Film'],
            ['nama_subsektor' => 'Seni Rupa'],
            ['nama_subsektor' => 'Seni Pertunjukan'],
            ['nama_subsektor' => 'Penerbitan'],
            ['nama_subsektor' => 'Periklanan'],
            ['nama_subsektor' => 'Kriya'],
            ['nama_subsektor' => 'Kuliner'],
            ['nama_subsektor' => 'Musik'],
            ['nama_subsektor' => 'Televisi dan Radio'],
        ];

        foreach ($data as $datum) {
            Subsektor::create($datum);
        }
    }
}