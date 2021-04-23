<?php

use Illuminate\Database\Seeder;

class crear_colores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([[
            'color'=> 'Negro', 'hex' =>"#000",
        ],[
            'color'=> 'Blanco', 'hex' =>"#fff",
        ] ,[
            'color'=>'Rojo', 'hex' =>"#f00",
        ], [
            'color'=>'Azul', 'hex' =>"#0f0",
        ],[
            'color'=>'Amarillo', 'hex' =>"#00f",
        ]]);
    }
}
