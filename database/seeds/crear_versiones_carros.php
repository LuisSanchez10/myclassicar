<?php

use Illuminate\Database\Seeder;

class crear_versiones_carros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //versiones de aveo
         DB::table('versions')->insert([[
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.4 16v LT+ Aut. - 4-puertas - 2011',
        ], [
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.2 16v LT+ - 4-puertas - 2011',
        ], [
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.3D LTZ 95 - 4-puertas - 2011',
        ],[
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.3D LT+ - 4-puertas - 2011',
        ],[
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Coupé',
            'version'=>'Aveo 1.3D LT+ 95 - 5-puertas - 2011',
        ],[
            'year'=> '2011',
            'model_id'=> '5',
            'vehicle_type'=> 'Coupe',
            'version'=>'Aveo 1.3D LT - 5-puertas - 2011',
        ],[
            'year'=> '2012',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.2 16v LT+ - 4-puertas - 2012',
        ],[
            'year'=> '2012',
            'model_id'=> '5',
            'vehicle_type'=> 'Sedán',
            'version'=>'Aveo Sedán 1.2 16v LS - 4-puertas - 2012',
        ],[
            'year'=> '2013',
            'model_id'=> '5',
            'vehicle_type'=> 'Coupé',
            'version'=>'Aveo 1.2 16v LT (no Eco) - 5-puertas - 2013',
        ]]);
    }
}
