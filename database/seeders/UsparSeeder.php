<?php

namespace Database\Seeders;

use App\Models\MasterDataUsahaPariwisata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsparSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_data_usaha_pariwisatas')->truncate();

        // 13 Jenis Usaha Pariwisata Sesuai UU No. 10 Tahun 2009
        $data = [
            ['jenis_usaha' => 'Daya Tarik Wisata'],
            ['jenis_usaha' => 'Kawasan Pariwisata'],
            ['jenis_usaha' => 'Jasa Transportasi Wisata'],
            ['jenis_usaha' => 'Jasa Perjalanan Wisata'],
            ['jenis_usaha' => 'Jasa Makanan dan Minuman'],
            ['jenis_usaha' => 'Penyediaan Akomodasi'],
            ['jenis_usaha' => 'Penyelenggaraan Kegiatan Hiburan dan Rekreasi'],
            ['jenis_usaha' => 'Penyelenggaraan Pertemuan, Perjalanan Insentif, Konferensi dan Pameran'],
            ['jenis_usaha' => 'Jasa Informasi Pariwisata'],
            ['jenis_usaha' => 'Jasa Konsultan Pariwisata'],
            ['jenis_usaha' => 'Jasa Pramuwisata'],
            ['jenis_usaha' => 'Wisata Tirta'],
            ['jenis_usaha' => 'SPA'],
        ];

        foreach ($data as $datum) {
            MasterDataUsahaPariwisata::create($datum);
        }
    }
}
