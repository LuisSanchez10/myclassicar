<?php

use Illuminate\Database\Seeder;

class crear_ciudades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([[
            'city'=> 'Bahía Blanca', 'ubication_id'=>'1'
        ],[
            'city'=> 'San isidro','ubication_id'=>'1'
        ],[
            'city'=> 'Vicente López', 'ubication_id'=>'1'
        ],[
            'city'=> 'Merlo', 'ubication_id'=>'1'
        ]]);
    }
}
