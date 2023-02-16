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

        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
