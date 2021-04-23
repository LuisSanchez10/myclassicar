<?php

use Illuminate\Database\Seeder;

class crear_combustibles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuels')->insert([[
            'fuel'=> 'Gasolina',
            
        ],[
            'fuel'=> 'Nafta',
        ] ]);
    }
}
