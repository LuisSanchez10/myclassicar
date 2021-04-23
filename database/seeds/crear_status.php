<?php

use Illuminate\Database\Seeder;

class crear_status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //estatus de publicaciones 
        DB::table('status_publication')->insert([[
            'id'=>1,
            'status'=> 'En curso',
            'description'=> 'La publicacion esta publicada y en la vitrina de vehiculos'
            
        ],[
            'id'=>2,
            'status'=> 'Inactiva',
            'description'=> 'La publicacion ha sido inactivada y no se muesta en la vitrina de vehiculos'
        ],[
            'id'=>3,
            'status'=> 'Pendiente',
            'description'=> 'La publicacion nunca fue publicada'
        ] ]);

        DB::table('status_question')->insert([[
            'id'=>1,
            'status'=> 'Pendiente',
            'description'=> 'Pregunta por responder'
        ],[
            'id'=>2,
            'status'=> 'Respondida',
            'description'=> 'Pregunta respondida'
        ] ]);
    }
}
