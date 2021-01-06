<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmploieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emploies')->insert([
            [
                'function' => 'CEO Company',

            ],
            [
                'function' => 'Devlopper Junior',

            ],
            [
                'function' => 'Devlopper Senior',

            ],
            [
                'function' => 'Designer',

            ],
        ]);
    }
}
