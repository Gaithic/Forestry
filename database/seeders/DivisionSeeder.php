<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranges')->insert([
            'id' => 10,
            'ranges' => 'Baldwara',
            'division_id' => 4
        
        ]);
        DB::table('ranges')->insert([
            'id' => 11,
            'ranges' => 'Kangoo',
            'division_id' => 4
        
        ]);
        DB::table('ranges')->insert([
            'id' => 12,
            'ranges' => 'Jaidevi',
            'division_id' => 4
        
        ]);
        DB::table('ranges')->insert([
            'id' => 13,
            'ranges' => 'Jhungi',
            'division_id' => 4
        
        ]);
        DB::table('ranges')->insert([
            'id' => 14,
            'ranges' => 'Sarkaghat',
            'division_id' => 4
        
        ]);
        DB::table('ranges')->insert([
            'id' => 15,
            'ranges' => 'Suket',
            'division_id' => 4
        
        ]);

        // DB::table('divisions')->insert([
        //     'id' => 2,
        //     'division' => 'Mandi',
        //     'circle_id' => 2
        
        // ]);

        // DB::table('divisions')->insert([
        //     'id' => 3,
        //     'division' => 'Nachan',
        //     'circle_id' => 2        
        // ]);
        // DB::table('divisions')->insert([
        //     'id' => 4,
        //     'division' => 'Suket',
        //     'circle_id' => 2        
        // ]);
        // DB::table('divisions')->insert([
        //     'id' => 5,
        //     'division' => 'Jogindernagar',
        //     'circle_id' => 2        
        // ]);


      

        
    }
    
}
