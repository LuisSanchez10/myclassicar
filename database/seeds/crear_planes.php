<?php

use Illuminate\Database\Seeder;

class crear_planes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([[
            'plan'=> 'Gratuito',
            'icon_plan'=> 'icon.svg',
            'plan_per_month'=> '0',
            'publications_per_month'=> '1',
            'quetions_per_month'=> '10',
            'featured_posts_per_month'=> '0',
        ],[
            'plan'=> 'Inicial',
            'icon_plan'=> 'icon.svg',
            'plan_per_month'=> '10',
            'publications_per_month'=> '-1',
            'quetions_per_month'=> '-1',
            'featured_posts_per_month'=> '1',
        ] ,[
            'plan'=> 'Profesional',
            'icon_plan'=> 'icon.svg',
            'plan_per_month'=> '20',
            'publications_per_month'=> '-1',
            'quetions_per_month'=> '-1',
            'featured_posts_per_month'=> '5',
        ]]);
    }
}
