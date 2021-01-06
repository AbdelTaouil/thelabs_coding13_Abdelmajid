<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buttons')->insert([
            [
                'text' => 'BROWSE',
                'section' => 'browse',

            ],
            [
                'text' => 'send',
                'section' => 'contact',

            ],
            [
                'text' => 'NEWSLETTER',
                'section' => 'newsletter',

            ],
        ]);
    }
}
