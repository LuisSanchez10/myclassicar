<?php

use Illuminate\Database\Seeder;

class crear_vehiculos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '1',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '2',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '3',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '4',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '5',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '6',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '7',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '8',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 
        DB::table('vehicles')->insert([
            'brand_id' => '2',
            'model_id' => '5',
            'version_id' => '9',
            'vin' => 'KL1TD5DE0BB210939',
        ]); 

    }
}
