<?php

use Illuminate\Database\Seeder;

class crear_tipos_de_vehiculos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_styles')->insert([[
            'vehicle_style'=> 'Coupe',
            'imagen_home'=> 'coupe.png',
        ], [
            'vehicle_style'=> 'Deportivo',
            'imagen_home'=> 'deportivo.png',
        ],[
            'vehicle_style'=> 'Hatchback',
            'imagen_home'=> 'hatchback.png',
        ], [
            'vehicle_style'=> 'Furgoneta',
            'imagen_home'=> 'furgoneta.png',
        ], [
            'vehicle_style'=> 'Sedan',
            'imagen_home'=> 'sedan.png',
        ]
        ]);
    }
}
