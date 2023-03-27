<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ComCode;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'JENIS_KELAMIN_ST_01', 'code_nm' => 'Laki-laki', 'code_group' => 'JENIS_KELAMIN_ST', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_ST_02', 'code_nm' => 'Perempuan', 'code_group' => 'JENIS_KELAMIN_ST', 'code_value' => ''],
            ['code_cd' => 'HKI_ST_01', 'code_nm' => 'Sudah', 'code_group' => 'HKI_ST', 'code_value' => ''],
            ['code_cd' => 'HKI_ST_02', 'code_nm' => 'Belum', 'code_group' => 'HKI_ST', 'code_value' => ''],
            ['code_cd' => 'BARANG_ST_01', 'code_nm' => 'Barang', 'code_group' => 'BARANG_ST', 'code_value' => ''],
            ['code_cd' => 'BARANG_ST_02', 'code_nm' => 'Jasa', 'code_group' => 'BARANG_ST', 'code_value' => ''],
            ['code_cd' => 'LOKASI_WISATA_TP_01', 'code_nm' => 'Hotel', 'code_group' => 'LOKASI_WISATA_TP', 'code_value' => ''],
            ['code_cd' => 'LOKASI_WISATA_TP_02', 'code_nm' => 'Homestay', 'code_group' => 'LOKASI_WISATA_TP', 'code_value' => ''],
            ['code_cd' => 'LOKASI_WISATA_TP_03', 'code_nm' => 'Pos Pendakian', 'code_group' => 'LOKASI_WISATA_TP', 'code_value' => ''],
            ['code_cd' => 'LOKASI_WISATA_TP_04', 'code_nm' => 'Objek Wisata', 'code_group' => 'LOKASI_WISATA_TP', 'code_value' => ''],

        ];
        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
