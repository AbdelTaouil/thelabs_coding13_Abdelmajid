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
                'adresse' => 'C/ Libertad, 34',
                'codepostal' => '05200 Arévalo',
                'numeros' => '0034 37483 2445 322',
                'email' => 'hello@company.com'
                
            ],
        ]);
    }
}
