<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('titres')->insert([
                [
                    'titre' => 'Get your freebie template now!', 
                    'section' => 'carousel',
                    'soustitre' => '',
                    'soustitres' => ''
                ],
                [
                    'titre' => 'GET IN (THE LAB) AND DISCOVER THE WORLD',
                    'section' => 'section1',

                    'soustitre' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',

                    'soustitres' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.'
                ],
                [
                    'titre' => 'WHAT OUR CLIENTS SAY',   
                    'section' => 'avis',
                    'soustitre' => '',
                    'soustitres' => ''
                ],
                [
                    'titre' => 'GET IN (THE LAB) AND SEE THE SERVICES',
                    'section' => 'service',
                    'soustitre' => '',
                    'soustitres' => ''
 
                ],
                [
                    'titre' => 'GET IN (THE LAB) AND MEET THE TEAM', 
                    'section' => 'team',
                    'soustitre' => '',
                    'soustitres' => ''

                ],
                [
                    'titre' => 'CONTACT US',
                    'section' => 'contact',
                    'soustitre' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.
                    ',
                    'soustitres' => ''

                ],
                [
                    'titre' => 'GET IN (THE LAB) AND DISCOVER THE WORLD', 
                    'section' => 'servicevip',
                    'soustitre' => '',
                    'soustitres' => ''

                ],
                [
                    'titre' => 'Are you ready to stand out?', 
                    'section' => 'section2',
                    'soustitre' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
                    'soustitres' => ''
                ],
            ]);
        }
    }
}
