<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UserSeeder::class);
         $this->call([
            // crear_sliders_home::class,
             user_admin::class,
             crear_marcas::class,
             crear_transmisiones::class, 
             crear_tipos_de_vehiculos::class,
             crear_modelos_carros::class,
             crear_versiones_carros::class,
             crear_colores::class,
             crear_combustibles::class,
             crear_interiores_de_carro::class,
             crear_ubicaciones::class,
             crear_ciudades::class,
             crear_monedas::class,
             crear_planes::class,
             crear_status::class,
             crear_vehiculos::class,
             crear_publicidad_text::class,
            // crear_publicaciones::class,
             crear_tipos_de_fotos::class,
             crear_sliders_home::class,
             crear_topicos_de_ayuda::class,
         ]);
       
    }
}
