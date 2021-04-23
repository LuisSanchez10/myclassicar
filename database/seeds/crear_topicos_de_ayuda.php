<?php

use Illuminate\Database\Seeder;

class crear_topicos_de_ayuda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('help_topics')->insert([
            'topic' => 'Comprando',
            'icon_topic'=> 'comprando.svg',
        ]); 
        DB::table('help_topics')->insert([
            'topic' => 'Vendiendo',
            'icon_topic'=> 'vendiendo.svg',
        ]); 
        DB::table('help_topics')->insert([
            'topic' => 'Mi cuenta',
            'icon_topic'=> 'micuenta.svg',
        ]); 
        DB::table('help_topics')->insert([
            'topic' => 'Seguridad',
            'icon_topic'=> 'seguridad.svg',
        ]); 
        DB::table('help_topics')->insert([
            'topic' => 'Legales',
            'icon_topic'=> 'legales.svg',
        ]); 
    }
}
