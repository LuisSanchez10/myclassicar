<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class crear_sliders_home extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_slides')->insert([[
            'title' => 'Encontrá hoy el clásico que siempre quisiste',
            'subtitle' => 'Unite a nuestra comunidad de apasionados y coleccionistas de autos clásicos ',
            'photo_slide' => 'slider1.png',
            'color1' => '#ff824b',
            'color2' => '#d04102',
            'order' => '1',
            'status' => '1',
        ],[
            'title' => 'Encontrá hoy el clásico que siempre quisiste',
            'subtitle' => 'Unite a nuestra comunidad de apasionados y coleccionistas de autos clásicos ',
            'photo_slide' => 'slider2.png',
            'color1' => '#ff824b',
            'color2' => '#d04102',
            'order' => '2',
            'status' => '1',
        ],[
            'title' => 'Encontrá hoy el clásico que siempre quisiste',
            'subtitle' => 'Unite a nuestra comunidad de apasionados y coleccionistas de autos clásicos ',
            'photo_slide' => 'slider3.png',
            'color1' => '#ff824b',
            'color2' => '#d04102',
            'order' => '3',
            'status' => '1',
        ],[
            'title' => 'Encontrá hoy el clásico que siempre quisiste',
            'subtitle' => 'Unite a nuestra comunidad de apasionados y coleccionistas de autos clásicos ',
            'photo_slide' => 'slider4.png',
            'color1' => '#ff824b',
            'color2' => '#d04102',
            'order' => '4',
            'status' => '1',
        ],[
            'title' => 'Encontrá hoy el clásico que siempre quisiste',
            'subtitle' => 'Unite a nuestra comunidad de apasionados y coleccionistas de autos clásicos ',
            'photo_slide' => 'slider5.png',
            'color1' => '#ff824b',
            'color2' => '#d04102',
            'order' => '5',
            'status' => '1',
        ]
            
        ]);
    }
}
