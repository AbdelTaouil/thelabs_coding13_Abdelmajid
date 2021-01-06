<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'logo' => 'flaticon-023-flask',
                'titre' => 'Get in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-011-compass',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'
            ],
            [
                'logo' => 'flaticon-037-idea',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-039-vector',
                'titre' => 'Social Media',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-039-vector',
                'titre' => 'Social Media',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'nom'

            ],
            [
                'logo' => 'flaticon-036-brainstorming',
                'titre' => 'Brainstorming',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-026-search',
                'titre' => 'Documented',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-018-laptop-1',
                'titre' => 'Responsive',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-043-sketch',
                'titre' => 'Retina ready',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-012-cube',
                'titre' => 'Ultra modern',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'non'

            ],
            [
                'logo' => 'flaticon-002-caliper',
                'titre' => 'et in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
            [
                'logo' => 'fflaticon-019-coffee-cup',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
            [
                'logo' => 'flaticon-025-imagination',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
            [
                'logo' => 'flaticon-037-idea',
                'titre' => 'Get in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
            [
                'logo' => 'flaticon-020-creativity',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
            [
                'logo' => 'flaticon-008-team',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'vip' => 'oui'

            ],
        ]);
    }
}
