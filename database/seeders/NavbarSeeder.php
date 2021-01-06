<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('navbars')->insert([
                [
                    'titre' => 'Home',
                    'section' => 'Home',


                ],
                [
                    'titre' => 'Services', 
                    'section' => 'Services',   
  
       
                ],
                [
                    'titre' => 'Blog',
                    'section' => 'Blog',

 
                ],
                [
                    'titre' => 'Contact', 
                    'section' => 'Contact', 


                ],
            ]);
        }
    }
}
