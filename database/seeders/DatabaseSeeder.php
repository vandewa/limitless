<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $faker = Faker::create('id_ID');
 
    	// for($i = 1; $i <= 50; $i++){
 
    	//       // insert data ke table pegawai menggunakan Faker
    	// 	DB::table('ekrafs')->insert([
    	// 		'nama_pemilik' => $faker->name,
    	// 		'nama_usaha' => $faker->address
    	// 	]);
 
    	// }
        $this->call(SubsektorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(ComCodeSeeder::class);
    }
}
