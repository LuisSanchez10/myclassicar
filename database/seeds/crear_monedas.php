<?php

use Illuminate\Database\Seeder;

class crear_monedas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([[
            'currency'=> 'Pesos',
            'symbol_currency'=> 'ARS'
            
        ],[
            'currency'=> 'Dólar',
            'symbol_currency'=> 'USD'
        ] ]);
    }
}
