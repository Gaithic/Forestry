<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class circleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circles')->insert([
            'id' => 1,
            'circle' => 'Bilaspur',
            'district_id' => 1
        
        ]);

        
        DB::table('circles')->insert([
            'id' => 2,
            'circle' => 'Mandi',
            'district_id' => 2
        
        ]);

        
        DB::table('circles')->insert([
            'id' => 3,
            'circle' => 'Kullu',
            'district_id' => 4
        
        ]);

        DB::table('circles')->insert([
            'id' => 4,
            'circle' => 'Kullu',
            'district_id' => 5
        
        ]);


        
        DB::table('circles')->insert([
            'id' => 5,
            'circle' => 'Rampur',
            'district_id' => 3
        ]);

        DB::table('circles')->insert([
            'id' => 6,
            'circle' => 'Rampur',
            'district_id' => 5
        ]);

        
        DB::table('circles')->insert([
            'id' => 7,
            'circle' => 'Rampur',
            'district_id' => 6
           
        ]);

        DB::table('circles')->insert([
            'id' => 8,
            'circle' => 'Shimla',
            'district_id' => 5
           
        ]);

        
        DB::table('circles')->insert([
            'id' => 9,
            'circle' => 'GHNP',
            'district_id' => 3
           
        ]);


        
        DB::table('circles')->insert([
            'id' => 10,
            'circle' => 'Shimla(WL)',
            'district_id' => 4
           
        ]);

        
        DB::table('circles')->insert([
            'id' => 11,
            'circle' => 'Dharmshala',
            'district_id' => 7
            
        ]);

        
        DB::table('circles')->insert([
            'id' => 12,
            'circle' => 'Hamirpur',
            'district_id' => 7
        ]);
    }
}
