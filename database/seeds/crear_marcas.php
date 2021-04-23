<?php

use Illuminate\Database\Seeder;

class crear_marcas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'brand' => 'Ford',
            'imagen_logo' => 'ford.png',
            'vin_code' => '0',
        ]);
        
        DB::table('brands')->insert([
            'brand' => 'Chevrolet',
            'imagen_logo' => 'chevrolet.png',
            'vin_code' => '0',
        ]); 
        
        DB::table('brands')->insert([
            'brand' => 'Volkswagen',
            'imagen_logo' => 'volkswagen.png',
            'vin_code' => '0',
        ]); 

        DB::table('brands')->insert([
            'brand' => 'BMW',
            'imagen_logo' => 'bmw.png',
            'vin_code' => '0',
        ]); 
        DB::table('brands')->insert([
            'brand' => 'Peugeot',
            'imagen_logo' => 'peugeot.png',
            'vin_code' => '0',
        ]); 

    }
}
