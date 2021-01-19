<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                'text' => '2017 All rights reserved. Designed by',
                'motcouleur' => 'Colorlib',
                'adresse' => 'Rue vonck',
                'codepostal' => '1210 ',
                'numeros' => '0034 37483 2445 322',
                'email' => 'hello@company.com'
                
            ],
        ]);
    }
}
