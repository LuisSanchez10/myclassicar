<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Classicar Admin',
            'email' => 'admin@classicar',
            'password' =>  Hash::make('Classicar123*'),
            'is_admin' => true,
        ]); 
    }
}
