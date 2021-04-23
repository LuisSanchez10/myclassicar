<?php

use Illuminate\Database\Seeder;

class crear_modelos_carros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Modelos de la Ford
         DB::table('models')->insert([
            'brand_id' => '1',
            'model' => 'Ecosport',
        ]); 
        DB::table('models')->insert([
            'brand_id' => '1',
            'model' => 'Focus',
        ]); 
        DB::table('models')->insert([
            'brand_id' => '1',
            'model' => 'Fiesta',
        ]); 
        DB::table('models')->insert([
            'brand_id' => '1',
            'model' => 'B-Max',
        ]); 
        //modelos de chevrolet 
        DB::table('models')->insert([
            'brand_id' => '2',
            'model' => 'Aveo',
        ]);
        DB::table('models')->insert([
            'brand_id' => '2',
            'model' => 'Camaro',
        ]);
        DB::table('models')->insert([
            'brand_id' => '2',
            'model' => 'Corvette',
        ]);  DB::table('models')->insert([
            'brand_id' => '2',
            'model' => 'Cruze',
        ]);
        DB::table('models')->insert([
            'brand_id' => '2',
            'model' => 'Captiva',
        ]);
        //modelos de volwagen
        DB::table('models')->insert([
            'brand_id' => '3',
            'model' => 'Polo',
        ]);
        DB::table('models')->insert([
            'brand_id' => '3',
            'model' => 'Golf',
        ]);
        DB::table('models')->insert([
            'brand_id' => '3',
            'model' => 'Tiguan',
        ]);
        DB::table('models')->insert([
            'brand_id' => '3',
            'model' => 'T-Roc',
        ]);
        DB::table('models')->insert([
            'brand_id' => '3',
            'model' => 'Passat',
        ]);

    }
}
