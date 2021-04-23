<?php

use Illuminate\Database\Seeder;

class crear_tipos_de_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_types')->insert([
            'photo_type' => 'Foto Frente',
            'description' => 'Foto frontal del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Foto Detras',
            'description' => 'Foto trasera del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Foto Lado Izq.',
            'description' => 'Foto del lado izquierdo del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Foto Lado Der.',
            'description' => 'Foto del lado derecho del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Interior.',
            'description' => 'Foto del interior del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Motor',
            'description' => 'Foto del motor del carro',
        ]); 
        DB::table('photo_types')->insert([
            'photo_type' => 'Optional',
            'description' => 'Foto adicional del carro',
        ]); 
    }
}
