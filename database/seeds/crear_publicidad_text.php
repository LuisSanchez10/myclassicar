<?php

use Illuminate\Database\Seeder;

class crear_publicidad_text extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads_texts')->insert([
            'title' => 'Publicá gratis, destacate un por poco más…',
            'subtitle' => 'Posicioná tu publicación por sobre otras para ganar visibilidad y tener más chances de que te contacten y compren tu auto clásico',
        ]); 
    }
}
