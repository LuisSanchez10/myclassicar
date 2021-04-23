<?php

use Illuminate\Database\Seeder;

class crear_publicaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '2',
            'vehicle_style_id' => '5',
            'kilometres' => '10000',
            'transmission_id' => '1',
            'fuel_id' => '1',
            'car_interior_id' => '2',
            'color_id' => '2',
            'description' => 'Es un carro maravilloso',
            'price' => '6000.00',
            'currency_id' => '2',
            'ubication_id' => '1',
            'city_id' => '2',
            'vin' => 'KSLDS3241',
            'status_publication_id' => '1',
        ]); 


        //fotos de la publicación 
        DB::table('car_photos')->insert([[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '1',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '2',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '3',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '4',
        ] ]); 


        //pregunta a la publicacion
        DB::table('questions')->insert([
            'user_id' => '2',
            'publication_id' => '1',
            'status_question_id' => '2',
            'question' => 'Hola, esta disponible el auto?',
        ]); 
        //respuesta a la pregunta
        DB::table('answers')->insert([
            'question_id' => '2',
            'answer' => 'Si, si esta disponible. Puede ofertar!',
        ]);

        //segunda publicacion
        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '55000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '10000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
            'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 

        //fotos de la publicación 


        //pregunta a la publicacion
        DB::table('questions')->insert([
            'user_id' => '2',
            'publication_id' => '2',
            'status_question_id' => '2',
            'question' => 'Hola, esta disponible el auto?',
        ]); 
        //respuesta a la pregunta
        DB::table('answers')->insert([
            'question_id' => '2',
            'answer' => 'Si, si esta disponible. Puede ofertar!',
        ]);

        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '100000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '7000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
            'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 

        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '35000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '800000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
             'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 


        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '40000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '17000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
            'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 


        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '60000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '25000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
             'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 

        DB::table('publications')->insert([
            'user_id' => '1',
            'vehicle_id' => '3',
            'vehicle_style_id' => '5',
            'kilometres' => '90000',
            'transmission_id' => '2',
            'fuel_id' => '2',
            'car_interior_id' => '1',
            'color_id' => '3',
            'description' => 'Es un carro de lujo',
            'price' => '70000.00',
            'currency_id' => '2',
            'ubication_id' => '2',
            'city_id' => '3',
            'vin' => 'KSLDS3241',
            'status_publication_id' => '0',
        ]); 



        //fotos de las publicaciones
        DB::table('car_photos')->insert([[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '1',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '2',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '3',
        ],[
            'publication_id' => '1',
            'car_photo' => 'img/autos/a1.jpg',
            'photo_type_id' => '4',
        ] ]);

        DB::table('car_photos')->insert([[
            'publication_id' => '2',
            'car_photo' => 'img/autos/a1.jpg',
         
            'photo_type_id' => '1',
        ],[
            'publication_id' => '2',
            'car_photo' => 'img/autos/a1.jpg',
         
            'photo_type_id' => '2',
        ],[
            'publication_id' => '2',
            'car_photo' => 'img/autos/a1.jpg',
           
            'photo_type_id' => '3',
        ],[
            'publication_id' => '2',
            'car_photo' => 'img/autos/a1.jpg',
           
            'photo_type_id' => '4',
        ] ]);

        DB::table('car_photos')->insert([[
            'publication_id' => '3',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '1',
        ],[
            'publication_id' => '3',
            'car_photo' => 'img/autos/a1.jpg',
        
            'photo_type_id' => '2',
        ],[
            'publication_id' => '3',
            'car_photo' => 'img/autos/a1.jpg',
         
            'photo_type_id' => '3',
        ],[
            'publication_id' => '3',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '4',
        ] ]);


        DB::table('car_photos')->insert([[
            'publication_id' => '4',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '1',
        ],[
            'publication_id' => '4',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '2',
        ],[
            'publication_id' => '4',
            'car_photo' => 'img/autos/a1.jpg',
        
            'photo_type_id' => '3',
        ],[
            'publication_id' => '4',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '4',
        ] ]);


        DB::table('car_photos')->insert([[
            'publication_id' => '5',
            'car_photo' => 'img/autos/a1.jpg',
        
            'photo_type_id' => '1',
        ],[
            'publication_id' => '5',
            'car_photo' => 'img/autos/a1.jpg',
           
            'photo_type_id' => '2',
        ],[
            'publication_id' => '5',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '3',
        ],[
            'publication_id' => '5',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '4',
        ] ]);

        DB::table('car_photos')->insert([[
            'publication_id' => '6',
            'car_photo' => 'img/autos/a1.jpg',
           
            'photo_type_id' => '1',
        ],[
            'publication_id' => '6',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '2',
        ],[
            'publication_id' => '6',
            'car_photo' => 'img/autos/a1.jpg',
          
            'photo_type_id' => '3',
        ],[
            'publication_id' => '6',
            'car_photo' => 'img/autos/a1.jpg',
            
            'photo_type_id' => '4',
        ] ]); 

        DB::table('car_photos')->insert([[
            'publication_id' => '7',
            'car_photo' => 'img/autos/a1.jpg',
            
            'photo_type_id' => '1',
        ],[
            'publication_id' => '7',
            'car_photo' => 'img/autos/a1.jpg',
            
            'photo_type_id' => '2',
        ],[
            'publication_id' => '7',
            'car_photo' => 'img/autos/a1.jpg',
           
            'photo_type_id' => '3',
        ],[
            'publication_id' => '7',
            'car_photo' => 'img/autos/a1.jpg',
         
            'photo_type_id' => '4',
        ] ]);     

    }
}
