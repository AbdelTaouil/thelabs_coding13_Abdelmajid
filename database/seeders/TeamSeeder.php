<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
           
                'nom' => 'Oussama le paysan',

                'src' => 'avatar/01.jpg',

                'emploie_id' => '1',


            ],
            [
            

                'src' => 'avatar/02.jpg',
                
                'nom' => 'Zidane le rifs',

                'emploie_id' => '2',


            ],
            [
            
                'nom' => 'Michael Smith',

                'src' => 'avatar/01.jpg',
                
                'emploie_id' => '2',


            ],
            [
            
                'nom' => 'Oussama le paysan',

                'src' => 'avatar/02.jpg',
                

                'emploie_id' => '2',


            ],
            [
            
                'nom' => 'Dina EL Aakel',

                'src' => 'avatar/01.jpg',
                

                'emploie_id' => '4',


            ],
            [
            
                'nom' => 'Hicham Majdi',

                'src' => 'avatar/02.jpg',
                

                'emploie_id' => '3',

            ],
        ]);
    }
}
