<?php

use Illuminate\Database\Seeder;

class crear_ubicaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubications')->insert([[
            'ubication'=> 'Buenos aires',
        ],[
            'ubication'=> 'Rosario',
        ],[
            'ubication'=> 'Ciudad de cordoba',
        ] ,[
            'ubication'=> 'La plata',
        ]]);

    }
}
