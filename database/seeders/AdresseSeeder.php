<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'Name' => 'Abdelmajid',

                'image' => 'avatar/01.jpg',

                'email' => 'admin@admin.com',

                'password' => Hash::make('admin@admin.com'),

                'role_id' => 1,


            ],
            [
                'Name' => 'Oussama',

                'image' => 'avatar/02.jpg',

                'email' => 'abdelmajidtg.pro@gmail.com',

                'password' => Hash::make('abdelmajidtg.pro@gmail.com'),

                'role_id' => 2,


            ],
            [
                'Name' => 'Lina',

                'image' => 'avatar/03.jpg',

                'email' => 'lina-elaakel@hotmail.be',

                'password' => Hash::make('lina-elaakel@hotmail.be'),

                'role_id' => 3,


            ],
            [
                'Name' => 'Zidane',

                'image' => 'avatar/01.jpg',

                'email' => 'redacteur@redacteur.com',

                'password' => Hash::make('redacteur@redacteur.com'),

                'role_id' => 4,

            ],
            [
                'Name' => 'Hatim',

                'image' => 'avatar/01.jpg',

                'email' => 'hatim@hatim.com',

                'password' => Hash::make('hatim@hatim.com'),

                'role_id' => 3,

            ],
            [
                'Name' => 'Youssef',

                'image' => 'avatar/01.jpg',

                'email' => 'youssef@gmail.com',

                'password' => Hash::make('youssef@gmail.com'),

                'role_id' => 3,

            ],
       
        ]);
    }
}
