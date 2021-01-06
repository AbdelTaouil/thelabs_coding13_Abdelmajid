<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avis')->insert([
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/01.jpg',
                
                'nom' => 'Oussama le paysan',

                'emploie_id' => '1',


            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/02.jpg',
                
                'nom' => 'Zidane le rifs',

                'emploie_id' => '2',


            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/01.jpg',
                
                'nom' => 'Michael Smith',

                'emploie_id' => '2',


            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/02.jpg',
                
                'nom' => 'Oussama le paysan',

                'emploie_id' => '2',


            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/01.jpg',
                
                'nom' => 'Dina EL Aakel',

                'emploie_id' => '4',


            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',

                'src' => 'avatar/02.jpg',
                
                'nom' => 'Hicham Majdi',

                'emploie_id' => '3',

            ],
        ]);
    }
}
