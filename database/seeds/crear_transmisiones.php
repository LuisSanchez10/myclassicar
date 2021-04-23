<?php

use Illuminate\Database\Seeder;

class crear_transmisiones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transmissions')->insert([[
            'transmission'=> 'Manual',
            
        ],[
            'transmission'=> 'Automática',
        ] ]);
    }
}
