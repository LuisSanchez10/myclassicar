<?php

use Illuminate\Database\Seeder;

class crear_interiores_de_carro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_interiors')->insert([[
            'car_interior'=> 'Cuero',
        ],[
            'car_interior'=> 'Semi-Cuero',
        ],[
            'car_interior'=> 'Sintetico',
        ] ]);
    }
}
