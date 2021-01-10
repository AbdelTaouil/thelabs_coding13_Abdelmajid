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
                'button' => 'BROWSE',
                'section' => 'browse',

            ],
            [
                'button' => 'send',
                'section' => 'contact',

            ],
            [
                'button' => 'NEWSLETTER',
                'section' => 'newsletter',

            ],
        ]);
    }
}
