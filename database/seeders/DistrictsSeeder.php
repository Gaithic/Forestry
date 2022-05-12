<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'id' => 1,
            'district' => 'Bilaspur'
        ]);

        
        DB::table('districts')->insert([
            'id' => 2,
            'district' => 'Mandi'
        ]);

        
        DB::table('districts')->insert([
            'id' => 3,
            'district' => 'Kullu'
        ]);

        
        DB::table('districts')->insert([
            'id' => 4,
            'district' => 'Lahul and Spiti'
        ]);

        
        DB::table('districts')->insert([
            'id' => 5,
            'district' => 'Shimla'
        ]);

        
        DB::table('districts')->insert([
            'id' => 6,
            'district' => 'Kinnaur'
        ]);

        
        DB::table('districts')->insert([
            'id' => 7,
            'district' => 'Kangra'
        ]);
    }
}
